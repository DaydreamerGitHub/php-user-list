<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	*{margin:0;padding: 0;text-decoration: none;}
	body{background: #ccc;color: #000;}
	#box{width: 300px;height: 400px;border:1px solid #888;margin:auto;background: #fff;margin-top: 100px;}
	.new{width: 300px;height: 50px;border-bottom: 1px solid #ccc;text-align: center;margin-bottom: 20px;}
	#box p span{line-height: 50px;}
	.back{float: right;margin-right:50px;}
	form{width: 220px;margin:auto;height: 280px;}
	form input{width: 155px;float: right;height: 30px;/* margin-top: 20px; */}
	form span{width: 60px;float: left;height: 30px;text-align: right;line-height: 30px;/* margin-top: 20px; */}
	#submit{width: 220px;background: #888;height: 50px;}
	form i{width: 220px;height: 20px;float: left;}
	form i span{font-size: 10px;color: red;float: right;width: 155px;line-height: 20px;text-align: left;display: none;}
</style>
<body>
	<div id="box">
		<p class="new"><span>注册新用户</span></p>

		<form action="regDo.php" method="post">
			<span>用户名:</span><input type="text" name="uName">
			<i><span>用户名格式不对！</span></i>
			<span>密码:</span><input type="password" name="uPwd">
			<i><span>密码格式不对！</span></i>
			<span>邮箱:</span><input type="text" name="uEmail">
			<i><span>邮箱格式不对！</span></i>
			<span>电话:</span><input type="text" name="uTel">
			<i><span>电话格式不对！</span></i>
			<input type="submit" value="提交" id="submit">
		</form>
		<span class="back"><a href="index.php"><返回</a></span>
	</div>
</body>
</html>