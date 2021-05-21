<!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/article.css">
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
		 				<div class="main">
		 						<div class="article">
		 							<form action="../admin/article.php" method="post">
		 								<h2>标题</h2>
				 						<input type="text" name="name" placeholder="请输入标题"/><br>
				 						<h3>内容</h3>
				 						<textarea rows="30" cols="50" name="content" placeholder="请输入"></textarea><br>	
				 						<input type="submit" name="submit" value="提交" class="btn">
				 						<input type="reset" name="" value="取消" class="btn">
		 							</form>
		 						</div>
		 				</div>
		 				
		 		</div>