 
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
	*{margin:0;padding: 0;}
	td{text-align: center;}
	table{margin:auto;}
	tr{line-height: 30px;}
</style>
<body>
	<table align="center" border="1" width="800">
		<tr>
			<td>用户名</td>
			<td>密码</td> 
			<td>邮箱</td>
			<td>电话</td>
			<td>日期</td>
			<td>操作</td>
		</tr>
		<?php 
			//计算总记录数
			$sql_0 = "select * from users";
			$result_0 = mysql_query($sql_0);
			$count = mysql_num_rows($result_0);
			//指定每页显示数
			$pagesize = 10;
			$totalpage = ceil($count/$pagesize);//多少页


			if($_GET["page"]){
				$page = $_GET["page"];
				if($page>$totalpage){
					$page = $totalpage;
				}
			}else{
				$page = 1;
			}

			$start = ($page-1)*$pagesize;

			//$sql = "select * from users limit开始位置，长度"
			$sql = "select * from users limit {$start},{$pagesize}";
			$result = mysql_query($sql);
			while($rs=mysql_fetch_array($result)){
		 ?>
		<tr>
			<td><?php echo $rs["uName"] ?></td>
			<td><?php echo $rs["uPwd"] ?></td>
			<td><?php echo $rs["uEmail"] ?></td>
			<td><?php echo $rs["uTel"] ?></td>
			<td><?php echo $rs["uDate"] ?></td>
			<td>
				<a href="userdel.php?uid=<?php echo $rs["uid"]; ?>">删除</a>
				 | 
				<a href="userupdate.php?uid=<?php echo $rs["uid"]; ?>">修改</a>
			</td>
		</tr>
		<?php 
			}
		 ?>
		<tr>
			<td colspan="6"> 
				共<?php echo $totalpage?>页/当前<?php echo $page?>页
				|
				<a href="main.php?page=1">首页</a>
				|
				<a href="main.php?page=<?php echo $page-1 ?>">上一页</a>
				|
				<a href="main.php?page=<?php echo $page+1 ?>">下一页</a>
				|
				<a href="main.php?page=<?php echo $totalpage ?>">尾页</a>
			</td>
		</tr>
	</table>
</body>
</html>