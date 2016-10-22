
<?php 
include("config.php");
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
<?php 
	
	$uid = $_GET["uid"];
	$sql = "select * from users where uid={$uid}";
	$result = mysql_query($sql);
	$rs = mysql_fetch_array($result);



 ?>
 	<form action="userupdateDo.php?uid=<?php echo $uid?>" method="post">
 		用户名：<input type="text" name="uName" value="<?php echo $rs['uName']; ?>"><br>
		密码：<input type="text" name="uPwd" value="<?php echo $rs['uPwd']; ?>"><br>
		邮箱：<input type="text" name="uEmail" value="<?php echo $rs['uEmail']; ?>"><br>
		电话：<input type="text" name="uTel" value="<?php echo $rs['uTel']; ?>"><br>
		日期：<input type="text" name="uDate" value="<?php echo $rs['uDate']; ?>"><br>
		<input type="submit" value="修改用户">
 	</form>
		
</html>