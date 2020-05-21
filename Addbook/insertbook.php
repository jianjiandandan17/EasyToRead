<?php
header('content-type:text/html;charset=utf-8');

include "../test/public/config.php";

$BookName=$_POST['BookName'];
$author=$_POST['author'];
$press=$_POST['press'];
$type=$_POST['type'];
$number=$_POST['number'];
$time=time();

$sql="insert into books(BookName,author,press,type,number,time) values('{$BookName}','{$author}','{$press}','{$type}','{$number}',{$time})";

if (mysqli_query($con,$sql)) {
	echo "<script>alert('添加成功！)</script>";
	echo "<script>location='addBookImg.php'</script>";
}else{
	echo "<script>alert('添加失败！)</script>";
	echo "<script>location='addbook.php'</script>";
}

?>