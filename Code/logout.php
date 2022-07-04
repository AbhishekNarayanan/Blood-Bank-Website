<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  


unset($_SESSION['name']);
session_destroy();
include("login.php");
?>