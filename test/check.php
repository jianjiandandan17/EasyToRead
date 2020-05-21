<?php
	header('content-type:text/html;charset=utf-8');
require 'public/config.php';


$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from user where username='{$username}' and password='{$password}'";

$result=mysqli_query($con,$sql);
//$row=array mysqli_result::fetch_assoc($result);
$row=mysqli_fetch_assoc($result);
if($row){
	setcookie('username',$username,time()+3600,'/');
	setcookie('userid',$row['id'],time()+3600,'/');
	echo "<script>alert('登录成功！')</script>";
	echo "<script>location='YDS.php?id={$row['id']}'</script>";
}else{
	echo "<script>alert('账号或密码错误！')</script>";
	echo "<script>location='login.php'</script>";
}

?>