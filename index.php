<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	*{margin:0;padding: 0;list-style:none;color: #000;text-decoration:none;}
	body{background: #ccc;}
	#box{width: 300px;height: 340px;background: #fff;margin:auto;margin-top: 100px;border:1px solid #888;}
	#uls li{float: left;width: 140px;text-align: center;height: 50px;line-height: 50px;}
	#uls{margin-left: 10px;width: 280px;}
	.bd{border-bottom: 1px solid #000;z-index:999;}
	form input{width: 220px;height: 30px;margin-top: 20px;}
	#box2{width: 220px; height: 100px;margin:auto;margin-top: 20px;}
	#dl{width: 220px;height: 50px;background: #888;margin-top:10px;}
	.spans{float: right;}
	#uls2 li{float: left;margin-right: 40px;}
	#uls2{margin-left: 40px;}
	#lis1{border-bottom: 1px solid #ccc;}
	#lis2{border-bottom: 1px solid #000;}
	#txt{color: #888;}
	.boxs{width: 300px;height: 290px;margin-top: 50px;}
	#boxsss{width: 100px;height: 100px;border:1px solid #ccc;margin:auto; margin-top: 100px;}
	form{width: 220px;height: 220px;margin:auto;}
	form p{margin-top: 10px;}
</style>
<body>
	<div id="box">
		<ul id="uls">  
			<li id="lis1"><a href="#">快速登录</a></li>
			<li id="lis2"><a href="#">账号密码登录</a></li>
		</ul> 
		<div class="boxs1 boxs" id="boxss">
			<form action="indexDo.php" method="post">
				<input type="text" value="手机号/会员名/邮箱" id="txt" name="uName">
				<input type="password" name="uPwd">
			
			
				<p><span><a href="#">忘记登录密码？</a></span>
				<span class="spans"><a href="reg.php">免费注册</a></span></p>
				<input type="submit" value="登录" id="dl">
			</form>
			<ul id="uls2">
				<li><a href="#">微博登录</a></li>
				<li><a href="#">支付宝登录</a></li>
			</ul>
		</div>
		<div class="boxs2 boxs" id="boxss2" style="display:none;">
			<div id="boxsss"></div>
		</div>
			
	</div>
</body>
<script>
	var uls = document.getElementById("uls");
	var lis = uls.getElementsByTagName("li");
	var lis1 = document.getElementById("lis1");
	var lis2 = document.getElementById("lis2");
	var boxss = document.getElementById("boxss");
	var boxss2 = document.getElementById("boxss2");
	var boxs = document.getElementsByName("boxs");

	lis1.onclick = function(){
		lis1.style = "border-bottom: 1px solid #000";
		lis2.style = "border-bottom: 1px solid #ccc";
		//boxss.innerHTML = "<div id='boxsss'></div>"
		boxss.style.display = "none"
		boxss2.style.display = "block"
	}
	lis2.onclick = function(){
		lis2.style = "border-bottom: 1px solid #000";
		lis1.style = "border-bottom: 1px solid #ccc";
		boxss2.style.display = "none"
		boxss.style.display = "block"
	}
	txt.onfocus = function(){
		if(txt.value=="手机号/会员名/邮箱"){
			txt.value = ""
		}
	}
	txt.onblur = function(){
		if(this.value==""){
			this.value = "手机号/会员名/邮箱"
		}
	}
</script>
</html>