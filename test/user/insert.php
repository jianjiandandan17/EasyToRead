<?php
header('content-type:text/html;charset=utf-8');

include "../public/config.php";

$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$class=$_POST['class'];
$studentid=$_POST['studentid'];
$time=time();

$sql="insert into user(username,password,name,sex,class,studentid,time) values('{$username}','{$password}','{$name}','{$sex}','{$class}','{$studentid}',{$time})";

if (mysqli_query($con,$sql)) {
	echo "<script>alert('添加成功！)</script>";
	echo "<script>location='biao.php'</script>";
}else{
	echo "<script>alert('添加失败！)</script>";
	echo "<script>location='add.php'</script>";
}

?>