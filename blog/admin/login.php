<?php
	session_start();

	require("dbname.php");
	$name = $_POST['log-name'];
	$pwd = $_POST['log-pwd'];
	$submit = $_POST['submit'];
	$sql = "select name,password from user";
	$stm =$conn->query($sql);
	 if(isset($_COOKIE['username'])){
	 	  echo '已经登录请勿登录';
	 	  return header("Refresh:3;Url=http://localhost/blog/main/login.php");
	 }
	 foreach ($stm as $v) {
	 		if($v['name'] == $name && $v['password'] == $pwd){
	 			//$_SESSION['name'] = $name;
				// $_SESSION['pwd'] = $pwd;
				setcookie('username',session_id(),time()+3600*24,'/blog');   //第四个参数  表示在什么目录下显示cookie / 是全部
	 			echo  '恭喜用户:'.$_SESSION['name'].'登录成功';
				return header("Refresh:3;Url=http://localhost/blog/index.php");
	 		}
		 }

	echo '用户名或者密码失败';
	return header("Refresh:3;Url=http://localhost/blog/main/login.php");