<?php
header('content-type:text/html;charset=utf-8');

include "../public/config.php";

$username=$_POST['username'];
$password=$_POST['password'];
$id=$_POST['id'];

$sql="upd user set username='{$username}',password='{$password}' where id={$id}";

if (mysqli_query($con,$sql)) {
	echo "<script>alert('修改成功！)</script>";
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert('修改失败！)</script>";
	echo "<script>location='edit.php'</script>";
}

?>