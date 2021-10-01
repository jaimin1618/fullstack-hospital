<?php
require_once('config.php');
require_once('functions.php');

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if (check_connection_error($conn)) { exit("CONNECTION ERROR"); }

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

function get_base_url($url='') {
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http://' .  $_SERVER['SERVER_NAME'] . '/VirtualHost/hospital/PROJECT/' . $url;
}

?>