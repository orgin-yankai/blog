<?php
session_start();
require_once("dbname.php");
header('content-type:text/html;charset=utf-8');

	
	 $name = $_POST['reg-name'];
	 $pwd = $_POST['reg-pwd'];
	 if(isset($_COOKIE['username'])){
	 	echo "已登录,请勿注册!";
	 	exit(header("Refresh:3;Url=http://localhost/blog/index.php"));
	 }
	 $sqlName = "select name from user";
	 $pst = $conn->query($sqlName);
	 	foreach ( $pst as $arr) {
	 		if($arr['name'] == $name){
		 		echo '用户名已注册,请重新注册';
		  		return  header('Refresh:3,Url=http://localhost/blog/main/register.php');
	 		}
	 	}
	 		//允许上传的格式
	$format = ['gif','jpg','jpeg','png'];
	//将字符串分割成 数组
     $arr = explode('.',$_FILES['image']['name']);
    //获取 数组最后一个 元素
     $end = end($arr);
     if($_FILES['image']['type'] == 'image/gif' ||
     	$_FILES['image']['type'] == 'image/jpg' ||
     	$_FILES['image']['type'] == 'image/jpeg' ||
     	$_FILES['image']['type'] == 'image/png'  &&
     	$_FILES['image']['size'] && 
     	//在数组中查找 值 并输出值
     	in_array($end, $format)
 	   ){
	     	//创建上传的脚本
			if($_FILES['image']['error'] > 0){     //等于0 就是上传成功
				echo '错误'.$_FILES['image']['error'];
			}else{
				echo '上传文件名：'.$_FILES['image']['name'].'<br>';
				echo '文件类型：'.$_FILES['image']['type'].'<br>';
				echo '文件大小：'.$_FILES['image']['size'].'<br>';
				echo '文件临时存储位置：'.$_FILES['image']['tmp_name'];
				$_SESSION['image_name'] = $_FILES['image']['name'];
				//$_SESSION['image_type'] = $_FILES['image']['type']; 
				  // 判断当前目录下的 upload 目录是否存在该文件
			        // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
			        if (file_exists("upload/" . $_FILES["image"]["name"]))
			        {
			            echo $_FILES["image"]["name"] . " 文件已经存在。 ";
			        }
			        else
			        {
			            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
			            move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
			            echo "文件存储在: " . "upload/" . $_FILES["image"]["name"];
			        }

			}

     }else{
     	echo '非法格式';
     }
	 $pic = $_FILES['image']['name']; 
	 //$image = iconv("UTF-8","gb2312", $pic);
	 $sql = "insert into user(name,password,image) values(?,?,?)";
	  $row= $conn->prepare($sql);
	  $row->execute(array($name,$pwd,$pic));
	  $_SESSION['name'] = $name;
	  $_SESSION['pwd'] = $pwd;
	  if($row){
	  	header('Location:http://localhost/blog/index.php');
	  }else{
	  	echo '注册失败';
	  }

echo 111;