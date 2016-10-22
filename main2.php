
<?php 
	include("config.php");
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	table{margin:auto;}
	td{width: 200px;text-align: center;line-height: 30px;}
</style>
<body>
	<table border="1">
		<tr>
			<td>用户名</td>
			<td>密码</td>
			<td>邮箱</td>
		</tr>
		<?php 
		$sql = "select * from users";
		$result = mysql_query($sql);
		$count = mysql_num_rows($result);

		$pagesize = 3;
		$topage = ceil($count/$pagesize);

		if($_GET["page"]){
			$page = $_GET["page"];
			if($page>$topage){
				$page = $topage;
			}
		}else{
			$page = 1;
		}

		$start = ($page-1)*$pagesize;

		$sql_0 = "select * from users limit {$start},{$pagesize}";
		$result_0 = mysql_query($sql_0);

		while($rs = mysql_fetch_array($result_0)){
		 ?>
		 <tr>
		 	<td><?php echo $rs["uName"]?></td>
		 	<td><?php echo $rs["uPwd"]?></td>
		 	<td><?php echo $rs["uEmail"]?></td>
		 </tr>
		 <?php 
		}
		  ?>
		  <tr>
		 	<td colspan="3">
		 		共<?php echo $topage ?>页/当前<?php echo $page?>页
		 		|
		 		<a href="main2.php?page=1">首页</a>
		 		|
		 		<a href="main2.php?page=<?php echo $page-1 ?>">上一页</a>
		 		|
		 		<a href="main2.php?page=<?php echo $page+1 ?>">下一页</a>
		 		|
		 		<a href="main2.php?page=<?php echo $topage ?>">尾页</a>
		 	</td>
		 </tr>
	</table>
</body>
</html>