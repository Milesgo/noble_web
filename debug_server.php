<?php
echo "HTTP_HOST: " . $_SERVER['HTTP_HOST'] . "\n";
echo "SERVER_NAME: " . $_SERVER['SERVER_NAME'] . "\n";
echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "\n";
echo "HTTPS: " . (isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : 'not set') . "\n";
echo "Current SERVERURL: " . SERVERURL . "\n";
echo "Current base_url: " . (function_exists('base_url') ? base_url() : 'CodeIgniter not loaded') . "\n";
?>
