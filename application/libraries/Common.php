<?php defined('BASEPATH') or exit('No direct script access allowed');

require 'aws-php/aws-autoloader.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

class Common
{
    public $s3; 

    public function __construct() {
        // EC2 IAM 역할 사용 - credentials 없이
        $this->s3 = new S3Client([
            'version' => 'latest',
            'region'  => 'ap-northeast-2'
        ]);              
    }

    public function initPaginationParameter($params)
    {
        $pagination['page'] = isset($params['getParam']['page']) ? intval($params['getParam']['page']) : 1;
        $pagination['limit'] = isset($params['getParam']['limit']) ? intval($params['getParam']['limit']) : 10;
        $pagination['orderkey'] = isset($params['getParam']['orderkey']) ? $params['getParam']['orderkey'] : $params['defaultOrderkey'];
        $pagination['posLimit'] = ($pagination['page'] - 1) * $pagination['limit'];

        return $pagination;
    }
 
    public function getParameter($url, $tag)
    {
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        return $query[$tag];
    }
 

    public function initDatatable($param) { 

        $alldata = $param['alldata'];
        $columnsDefault = $param['columnsDefault'];
        $_REQUEST = $param['request'];        


        if (isset($_REQUEST['columnsDef']) && is_array($_REQUEST['columnsDef'])) {
            $columnsDefault = [];
            foreach ($_REQUEST['columnsDef'] as $field) {
                $columnsDefault[$field] = true;
            }
        }

        $data = [];
        // internal use; filter selected columns only from raw data
        foreach ($alldata as $d) {
            $d = get_object_vars($d);
            $data[] = $this->filterArray($d, $columnsDefault);
        }

        // count data
        $totalRecords = $totalDisplay = count($data);

        // filter by general search keyword
        if (isset($_REQUEST['search'])) {
            $data         = $this->filterKeyword($data, $_REQUEST['search']);
            $totalDisplay = count($data);
        }

        if (isset($_REQUEST['columns']) && is_array($_REQUEST['columns'])) {
            foreach ($_REQUEST['columns'] as $column) {
                if (isset($column['search'])) {
                    $data         = $this->filterKeyword($data, $column['search'], $column['data']);
                    $totalDisplay = count($data);
                }
            }
        }

        // sort
        if (isset($_REQUEST['order'][0]['column']) && $_REQUEST['order'][0]['dir']) {
            $column = $_REQUEST['order'][0]['column'];
            $dir    = $_REQUEST['order'][0]['dir'];

            usort($data, function ($a, $b) use ($column, $dir) {
                $a = array_slice($a, $column, 1);
                $b = array_slice($b, $column, 1);
                $a = array_pop($a);
                $b = array_pop($b);

                if ($dir === 'asc') {
                    return $a > $b ? true : false;
                }

                return $a < $b ? true : false;
            });
        }

        // pagination length
        if (isset($_REQUEST['length'])) {
            $data = array_splice($data, $_REQUEST['start'], $_REQUEST['length']);
        }

        // return array values only without the keys
        if (isset($_REQUEST['array_values']) && $_REQUEST['array_values']) {
            $tmp  = $data;
            $data = [];
            foreach ($tmp as $d) {
                $data[] = array_values($d);
            }
        }

        $secho = 0;
        if (isset($_REQUEST['sEcho'])) {
            $secho = intval($_REQUEST['sEcho']);
        }

        return array(
            'iTotalRecords' => $totalRecords,
            'iTotalDisplayRecords' => $totalDisplay,
            'sEcho' => $secho,
            'sColumns' => '',
            'aaData' => $data);
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////
    ////////// datatable 목록 불러올 때 필요 (시작)
    ///////////////////////////////////////////////////////////////////////////////////////////////

    function filterArray($array, $allowed = [])
    {
        return array_filter(
            $array,
            function ($val, $key) use ($allowed) { // N.b. $val, $key not $key, $val
                return isset($allowed[$key]) && ($allowed[$key] === true || $allowed[$key] === $val);
            },
            ARRAY_FILTER_USE_BOTH
        );
    }

    function filterKeyword($data, $search, $field = '')
    {
        $filter = '';
        if (isset($search['value'])) {
            $filter = $search['value'];
        }
        if (!empty($filter)) {
            if (!empty($field)) {
                if (strpos(strtolower($field), 'date') !== false) {
                    // filter by date range
                    $data = filterByDateRange($data, $filter, $field);
                } else {
                    // filter by column
                    $data = array_filter($data, function ($a) use ($field, $filter) {
                        return (bool) preg_match("/$filter/i", $a[$field]);
                    });
                }
            } else {
                // general filter
                $data = array_filter($data, function ($a) use ($filter) {
                    return (bool) preg_grep("/$filter/i", (array) $a);
                });
            }
        }

        return $data;
    }

    function filterByDateRange($data, $filter, $field)
    {
        // filter by range
        if (!empty($range = array_filter(explode('|', $filter)))) {
            $filter = $range;
        }

        if (is_array($filter)) {
            foreach ($filter as &$date) {
                // hardcoded date format
                $date = date_create_from_format('m/d/Y', stripcslashes($date));
            }
            // filter by date range
            $data = array_filter($data, function ($a) use ($field, $filter) {
                // hardcoded date format
                $current = date_create_from_format('m/d/Y', $a[$field]);
                $from    = $filter[0];
                $to      = $filter[1];
                if ($from <= $current && $to >= $current) {
                    return true;
                }

                return false;
            });
        }

        return $data;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////
    ////////// datatable 목록 불러올 때 필요 (끝)
    ///////////////////////////////////////////////////////////////////////////////////////////////    
}
