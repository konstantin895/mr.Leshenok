<?php
require_once('boot.php');
if(isset($_POST['login']) && isset($_POST['password']))
{
    $login = $_POST['login'];
    $password =$_POST['password'];
    $sql  = "SELECT * FROM user WHERE login = '$login' and password = '$password'";
    $stmt  =  get_mysqli()->query($sql);
    if($row = $stmt->fetch_assoc())
    {
        $_SESSION['userid'] = $row['id'];
        $_SESSION['login'] = $login;
        header("Location: registration.php");
    }
    else{
        header("Location: registration.php");
    }

    exit();
}
?>