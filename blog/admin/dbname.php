<?php
$servername = 'localhost';
$name = 'root';
$pwd = 'root';
$conn = null;
//创建连接
try{
	$conn = new PDO("mysql:host=$servername;dbname=liuyanban",$name,$pwd);//,array(PDO::ATTR_PERSISTENT=>true 
}catch(PDOException $e){
	phpinfo();
	echo $e->getMessage();
}
