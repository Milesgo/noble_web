"use strict";
var KTDatatables = function() {

    var initTable = function() {
        var table = $('#datatable');

        // begin first table
        table.DataTable({
            responsive: true,
            scrollX: false,
            autoWidth: false,
            searchDelay: 500,    
            processing: true,
            serverSide: true,
            stateSave: false,
            dom: '<"toolbar">frtlip',
            select: {
                style: 'multi',
                selector: '.kt-checkable',
            },
            ajax: "/api_datatable/BoardpostNew/" + $("#board_id").val(),
            columns: [
                {data: 'pur_no'},
                {data: 'pur_no'},
                {data: 'pur_status', width: '50px'},
                {data: 'mem_name', width: '80px'},
                {data: 'mem_email'},
                {data: 'pur_os'},
                {data: 'order_id'},
                {data: 'product_id'},
                {data: 'pur_price'},
                {data: 'acc_no'},
                {data: 'pur_regdate'},
                {data: 'pur_canceldate'}
            ],
            order: [],
            pageLength: 25,
            headerCallback: function(thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = `
                    <label class="kt-checkbox kt-checkbox--single kt-checkbox--solid kt-checkbox--brand">
                        <input type="checkbox" value="" class="kt-group-checkable">
                        <span></span>
                    </label>`;
            },
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return `
                        <label class="kt-checkbox kt-checkbox--single kt-checkbox--solid kt-checkbox--brand">
                            <input type="checkbox" value="" class="kt-checkable">
                            <span></span>
                        </label>`;
                    },
                }, 
                // {
                //     targets: 2,
                //     orderable: false,
                //     searchable : true,                    
                //     render: function(data, type, full, meta) {
                //         var status_title, status_class;
                //             if(full.pur_canceldate != null) {
                //                 status_title = "취소";
                //                 status_class = "m-badge--metal";
                //             } else {
                //                 status_title = "정상";
                //                 status_class = "m-badge--info";
                //             }
                //         return '<span class="m-badge ' + status_class + ' m-badge--wide">' + status_title + "</span>";
                //     },
                // }, 
                {
                    targets: 3,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return (full.mem_name != '') ? full.mem_name : '비회원';
                    },
                }, {
                    targets: 5,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return (full.pur_os == "ios") ? "iOS" : full.pur_os;
                    },
                }, {
                    targets: 7,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var temp;
                        switch(full.product_id) { 
                            case "noble_subscription":
                                temp = "월정액 ("+full.num_pay+"회차)";
                                break;
                            case "noble_6":
                                temp = "6개월";
                                break;
                            case "noble_12":
                                temp = "12개월";
                                break;
                            case "noblecash_10000":
                                temp = "10,000캐시";
                                break;
                            case "noblecash_30000":
                                temp = "30,000캐시";
                                break;
                            case "noblecash_50000":
                                temp = "50,000캐시";
                                break;
                        }
                        return temp;
                    },
                }, {
                    targets: 8,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return full.pur_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+"원";
                    },
                }, {
                    targets: 9,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        switch(full.product_id) { 
                            case "noble_subscription":
                            case "noble_6":
                            case "noble_12":
                                return full.acc_fromtime.substring(0,10) + " ~ " + full.acc_totime.substring(0,10);
                                break;
                            default:
                                return "-";
                                break;
                        }    
                    },
                }, {
                    targets: 10,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return (full.num_pay == 1) ? full.pur_regdate : '자동결제';
                    },
                }, {
                    targets: 11,
                    orderable: false
                }
            ]
        });


        $('#datatable').on('change', '.kt-group-checkable', function() {
            if ($(this).is(':checked')) {
                $('.kt-checkable').prop('checked', true);
                $('#datatable').DataTable().rows({ search: 'applied' }).select();
            } else {
                $('.kt-checkable').prop('checked', false);    
                $('#datatable').DataTable().rows({ search: 'applied' }).deselect();
            }
        });
    
        $('#datatable').on('change', '.kt-checkable', function() {
            var allRows = $('#datatable').DataTable().rows({ search: 'applied' }).count(); // get total count of rows
            var selectedRows = $('#datatable').DataTable().rows({ selected: true, search: 'applied' }).count(); // get total count of selected rows

            $(this).parent().parent().trigger("click");
            
            if(allRows == selectedRows)
                $('.kt-group-checkable').prop('checked', true);
            else
                $('.kt-group-checkable').prop('checked', false);
        });    

        $("#datatable_filter > label > input").unbind().keyup( function (e) {
            if (e.keyCode == 13) {
                $('#datatable').DataTable().search( this.value ).draw();
            }
        } );

        $("div.toolbar").html('<button class="btn btn-sm btn-danger" type="button" id="m_datatable_delete_all" board_id="<?=$board_id?>">삭제</button> &nbsp; '
            + '<button class="btn btn-sm btn-success" type="button" id="m_datatable_download">다운로드</button> &nbsp; '
            + '<select id="filter_status"><option value="">전체</option><option value="정상">정상</option><option value="취소">취소</option></select>'
        );

        $('#filter_status').on('change',function(){
            var value = $(this).val();
            $('#datatable').DataTable().column(2).search(value).draw();
            // oTable.fnFilter("^"+selectedValue+"$", 0, true); //Exact value, column, reg
        });

        // $( 'input', this ).on( 'keyup change', function () {
        //     if ( table.column(i).search() !== this.value ) {
        //         table
        //             .column(i)
        //             .search( this.value )
        //             .draw();
        //     }
        // } );

        $("#m_datatable_delete_all").on("click", function(t) { // 게시글 일괄 삭제
            var selectedNo = getSelectedNo('pur_no');

                if(selectedNo.length!=1) {
                    swal({
                        text: '취소할 결제건을 1개 선택하세요',
                        type: 'warning',
                        showCancelButton: false,
                        confirmButtonText: '확인'
                    });
                } else { 
                    swal({
                        title: '확인',
                        text: '취소 처리하시겠습니까?',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: '확인',
                        cancelButtonText: '취소'
                    }).then(function(e) {
            
                        if(e.value==true) { 
                            var formData = new FormData();
                            formData.append('pur_no', selectedNo);            
                            deleteThing('purchase/cancel', 'purchase', formData);
                        }
                    })  
                }
        });

        $('#m_datatable_download').on("click", function(t) {
            location.href="/download?board_id="+$("#board_id").val()+"&keyword="+$('.dataTables_filter input').val();
        });

    };


    return {
        //main function to initiate the module
        init: function() {
            initTable();
        },
    };
}();


jQuery(document).ready(function() {
    KTDatatables.init();    

    // $("#datatable tbody").css("cursor","pointer");
    
    // $('#datatable tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
    //     var data = $('#datatable').DataTable().row($(this).closest('tr')).data();
    //     $(location).attr('href', "/admin/member/upload/"+data['mem_no']);
    // } );    


    
});
