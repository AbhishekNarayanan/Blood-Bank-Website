<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);  
error_reporting(E_ALL ^ E_NOTICE);  


?>
<html>
<head>
	<title></title>
</head>
<body>
<?php

if(isset($_POST['case1']) && isset($_POST['case2']) && isset($_POST['case3']) && isset($_POST['case4']) && isset($_POST['diseases1']) && isset($_POST['diseases2']) && isset($_POST['diseases3']) && isset($_POST['diseases4']) && isset($_POST['diseases5']))
{
	include("register_donor.php");
}
else
{
     include("noteligible.php");
}
?>
</body>
</html>
