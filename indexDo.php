<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
<?php 
	//连接数据库
	$link = mysql_connect("localhost","root","6187606");
	mysql_query("set names utf8"); 
	mysql_select_db("1409v",$link);

	$uName = $_POST["uName"];
	$uPwd = $_POST["uPwd"];

	$sql = "select * from users where uName='{$uName}'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	if($count<=0){
		?>
			<script>
				alert("用户名不存在");
				window.location="index.php";
			</script>
		<?php 
	}else{
		$rs = mysql_fetch_array($result);
		if($uPwd==$rs["uPwd"]){
			?>
				<script>
					alert("欢迎登录")
					window.location="main.php";
				</script>
			<?php 
		}else{
			?>
				<script>
					alert("密码不正确");
					window.location="index.php";
				</script>
			<?php 
		}
	}
 ?>
</html>