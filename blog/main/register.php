<!DOCTYPE html>
<html>
<head>
	<title>注册</title>
	<link rel="stylesheet" type="text/css" href="../css/register.css">
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
			 					<img src="image/yankai.jpg" width="80px" height="80px" style="position: relative;top:-20px;left:40px">
			 					<span class="time">当前时间：<?php echo date('Y/m/d H:i');?></span>
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
		 				<div class="register">
		 					<form method="post" action="../admin/register.php"  enctype="multipart/form-data">
			 					<span class="span1">用户名：</span><input type="text" name="reg-name" class="input1"><br>
			 					<span  class="span2">密&#12288;码：</span><input type="password" name="reg-pwd"  class="input2"><br>
			 					<span  class="span3">头&#12288;像：</span><input type="file" name="image"  class="input3"><br>
			 					<input type="submit" name="submit" value="注册" class="submit">
			 					<input type="reset" name="reset" value="取消" class="reset">
		 					</form>
		 				</div>
		 		</div>