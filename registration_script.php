<?php
require_once('boot.php');
if(isset($_POST['login']) && isset($_POST['password']))
{
    $login = $_POST['login'];
    $password =$_POST['password'];
    $sql  = "INSERT INTO user(login, password) VALUES ('$login','$password')";
    $stmt  =  get_mysqli()->query($sql);
    header("Location: registration.php");
    exit();
}
?>