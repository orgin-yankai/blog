<!DOCTYPE html>
<html>
<head>
	<title>博客</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="all">
		 <div class="liuyanben">
		 		<div class="header">
		 				<div class="nav">
		 					<div class="left">
		 							<a  href="" class="liuyanben">留言本</a>
					 				<a  href="index.php" class="index">首页</a>
					 				
		 					</div>

			 				<div class="right">
			 						<a href="" class="self">个人简介</a>
			 						<a href="main/login.php" class="login">登录</a>
			 						<a href="main/register.php" class="register">注册</a>
			 						<a href="admin/signOut.php" class="register">退出</a>
			 				</div>
			 				
			 					<?php
			 						session_start();
			 						if(isset($_COOKIE['username'])){
			 							$pic = "http://localhost/blog/admin/upload/".$_SESSION['image_name']; //使用session 保存的 类型和昵称

			 						}
			 						
			 					?>
			 					<img src="<?php echo $pic?>" width="80px" height="80px" style="position: relative;top:-20px;left:40px">
			 					<span class="time">			<?php 			 								
			 													if(isset($_COOKIE['username'])){
			 														echo '登录时间：'.date("Y:m:d H:i");
			 													}else{
			 													    echo '退出时间：'.date("Y:m:d H:i");
			 													}
			 												?></span>
			 					<?php
			 						 if(isset($_COOKIE['username'])){
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

		 					<div class="left">
		 						<div class="top">
		 							<div  class="top-article">
		 							<img src="<?php echo $pic?>" width="30px" height="30px" style="position: relative";>
		 									<span class="span">
		 										<?php 
		 											require'admin/dbname.php';
			 										$sql = "select name from article";
			 										$stm = $conn->query($sql);
			 										foreach ($stm as $v) {
			 											echo '标题：'.$v['name'];
		 										}

		 									?></span>
		 								<p class="duanluo"><?php 
		 										$sql = "select content from article";
		 										$stm = $conn->query($sql);
		 										foreach ($stm as $v) {
		 											echo $v['content'];
		 										}
		 								?></p>
		 								<span class="top-article-span" style="margin-left:10px; ">
		 									<?php
		 										$sql = "select time from article";
		 										$stm = $conn->query($sql);
		 										foreach ($stm as $v) {
		 											echo $v['time'];
		 										}
		 									?>
		 										
		 								</span>
		 							</div>
		 							<div  class="top-article">
		 								<img src="<?php echo $pic?>" width="30px" height="30px" style="position: relative";>
		 								<span class="span">
		 									<?php 
		 										require 'admin/dbname.php';
		 										$sql = "select name from article";
		 										$stm = $conn->query($sql);
		 										foreach ($stm as $v) {
		 											echo '标题：'.$v['name'];
		 										}

		 									?></span>
		 								<p class="duanluo"><?php 
		 										
		 										require 'admin/dbname.php';
		 										$sql = "select content from article";
		 										$stm = $conn->query($sql);
		 										foreach ($stm as $v) {
		 											echo $v['content'];
		 										}
		 								?></p>
		 								<span class="top-article-span" style="margin-left:10px; ">
		 									<?php
		 										$sql = "select time from article";
		 										$stm = $conn->query($sql);
		 										foreach ($stm as $v) {
		 											echo $v['time'];
		 										}
		 									?>
		 										
		 								</span>
		 							</div>
		 								<div  class="top-article">
		 								<img src="<?php echo $pic?>" width="30px" height="30px" style="position: relative";>
		 								<span class="span">
		 									<?php 
		 										require 'admin/dbname.php';
		 										$sql = "select name from article";
		 										$stm = $conn->query($sql);
		 										foreach ($stm as $v) {
		 											echo '标题：'.$v['name'];
		 										}

		 									?></span>
		 								<p class="duanluo"><?php 
		 										
		 										require 'admin/dbname.php';
		 										$sql = "select content from article";
		 										$stm = $conn->query($sql);
		 										foreach ($stm as $v) {
		 											echo $v['content'];
		 										}
		 								?></p>
		 								<span class="top-article-span" style="margin-left:10px; ">
		 									<?php
		 										$sql = "select time from article";
		 										$stm = $conn->query($sql);
		 										foreach ($stm as $v) {
		 											echo $v['time'];
		 										}
		 									?>
		 										
		 								</span>
		 							</div>
		 						</div>
		 					</div>
		 					<div class="right">
		 						<div class="jishu">
		 							<h3>

		 								<a href="main/article.php">发表文章</a>
		 							</h3>
		 							<h2>技术文章</h2>
		 							<?php
		 									$sql = "select content from article";
		 										$stm = $conn->query($sql);
		 										foreach ($stm as $v) {		 										
		 							?>
			 							<div  class="article">
			 								<span>
			 									<a href=""><?php echo $v['content']?></a>
			 								</span>
			 							</div>
		 							<?php

		 							}

		 							?>

		 		</div>
		 </div>

	</div>
</body>
</html>