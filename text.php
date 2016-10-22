<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	if($_GET["page"]){
		$page = $_GET["page"];
	}else{
		$page = 1;
	}
	echo $page;
	 ?>
	<a href="text.php?page=2">链接本页</a>
</body>
</html>