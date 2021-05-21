<!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<div class="all">
		 <div class="liuyanben">
		 		<div class="header">
		 				<div class="nav">
		 					<div class="left">
		 							<a  href="" class="liuyanben">留言本</a>
					 				<a  href="../index.php" class="index">首页</a>
					 				
		 					</div>

			 				<div class="right">
			 						<a href="" class="self">个人简介</a>
			 						<a href="login.php" class="login">登录</a>
			 						<a href="register.php" class="register">注册</a>
			 				</div>
			 					<img src="" width="80px" height="80px" style="position: relative;top:-20px;left:40px">
			 					<span class="time">当前时间： <?php echo date('Y/m/d H:i');?></span>
			 					<?php
			 						 if(false){
			 						 	echo '<span class="state">状态：
			 						 			<div  class ="yuan" style="border-radius: 50%;width:10px;height:10px;border:1px solid gray;background:green;"></div>

			 						 	      </span>';
			 						 }else{
			 						 	echo '<span class="state">状态：
			 						 			<div  class ="yuan" style="border-radius: 50%;width:10px;height:10px;border:1px solid gray;background:white;"></div>

			 						 	      </span>';
			 						 }
			 					?>
		 				</div>
		 				
		 		</div>
		 		<div class="main">
		 				<div class="login">
		 					<form method="post" action="../admin/login.php">
			 					<span>用户名：</span><input type="text" name="log-name" class="input1"><br>
			 					<span>密&#12288;码：</span><input type="password" name="log-pwd" class="input2"><br>
			 					<input type="submit" name="submit" value="登录" class="submit">
			 					<input type="reset" name="reset" value="取消" class="reset">
		 					</form>
		 				</div>
		 		</div>