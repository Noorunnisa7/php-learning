<?php

session_start();
if(!isset($_SESSION['user']) || !isset($_COOKIE['user'])){
    session_destroy();
    header('location:login.php');
}

if($_COOKIE['user'] < time() ){
    session_destroy();
    header("location:login.php");
}
?>