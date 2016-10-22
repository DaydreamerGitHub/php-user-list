<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
<?php 
	$link = mysql_connect("localhost","root","6187606");
	mysql_query("set names utf8"); 
	mysql_select_db("1409v",$link);

	$uName = $_POST["uName"];
	$uPwd = $_POST["uPwd"];
	$uEmail = $_POST["uEmail"];
	$uTel = $_POST["uTel"];
	$uDate = date("Y-m-d");

	$sql = "insert into users(uName,uPwd,uEmail,uTel,uDate) 
	values('{$uName}','{$uPwd}','{$uEmail}','{$uTel}','{$uDate}')";

	mysql_query($sql);
?>
<script type="text/javascript">
	/*alert("注册成功");
	window.location="index.php";*/
</script>
</html>