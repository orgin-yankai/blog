<?php
require'dbname.php';
	$name = $_POST['name'];
	$content = $_POST['content'];
	if(!isset($_COOKIE['username'])){
		echo '请先登录!';
		exit(header('Refresh:3;url=http://localhost/blog/main/login.php'));
	}
	$sql = "insert into article(name,content,time)  values(?,?,?)";
	$stm=$conn->prepare($sql);
	$row=$stm->execute(array($name,$content,date("Y/m/d H:i")));
	echo $row;   // 1 代表成功
	//header("Refresh:3;url=http://localhost/blog/index.php");
	// $sql = "select name from user";
	// $s = $conn->query($sql);
	
	