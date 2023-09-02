<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
function get_mysqli()
{
    static $mysqli;
    if(!$mysqli){
        $config = include('bd_config.php');
        $mysqli = new mysqli($config['bd_host'], $config['bd_user'], $config['bd_pass'], $config['bd_name']);
    }
    return $mysqli;
}
?>