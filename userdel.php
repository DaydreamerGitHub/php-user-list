<?php 
	include("config.php");

	$uid = $_GET["uid"];

	$sql = "delete from users where uid={$uid}";
	echo $sql;
	mysql_query($sql);

 ?>