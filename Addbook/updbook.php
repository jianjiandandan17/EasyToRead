<?php
header('content-type:text/html;charset=utf-8');

include "../test/public/config.php";

$BookName=$_POST['BookName'];
$author=$_POST['author'];
$press=$_POST['press'];
$type=$_POST['type'];
$number=$_POST['number'];
$bookid=$_POST['bookid'];

$sql="upd books set BookName='{$BookName}',author='{$author}',press='{$press}',type='{$type}',number='{$number}' where bookid={$bookid}";

if (mysqli_query($con,$sql)) {
	echo "<script>alert('修改成功！)</script>";
	echo "<script>location='bookindex.php'</script>";
}else{
	echo "<script>alert('修改失败！)</script>";
	echo "<script>location='editbook.php'</script>";
}

?>