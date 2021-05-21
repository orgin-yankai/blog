<?php
session_start();   //用session 必须开启
 if(isset($_COOKIE['username'])){
 	//session_destroy();  //销毁全部 session  
 	//unset($_SESSION['name']);
 	//unset($_SESSION['pwd']);
 	//session_destroy();
 	setcookie('username','',time()-3600*24,'/blog');
 	header('Refresh:3;Url=http://localhost/blog/index.php');
 	echo $_COOKIE['username'].'退出成功';
 }else{
 	echo '删除失败';
 	die(header('Refresh:3;Url=http://localhost/blog/index.php'));   // exit的别名  都是退出的意思
 }
 