<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
<?php 
include("config.php");
$uid = $_GET["uid"];
	$uName = $_POST["uName"];
	$uPwd = $_POST["uPwd"];
	$uEmail = $_POST["uEmail"];
	$uTel = $_POST["uTel"];
	$uDate = date("Y-m-d");

$sql = "update users set uName='{$uName}',uPwd='{$uPwd}',uEmail='{$uEmail}',uTel='{$uTel}',uDate='{$uDate}' where uid={$uid}";
mysql_query($sql);
 ?>
 <script>
 	window.location = "main.php";
 </script>
</html>