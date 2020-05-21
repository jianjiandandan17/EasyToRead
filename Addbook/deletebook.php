<?php
header('content-type:text/html;charset=utf-8');
include "../test/public/config.php";

$id=$_GET['bookid'];
$sql="delete from books where bookid={$id}";

if(mysqli_query($con,$sql)){
	echo "<script>alert('删除成功！')</script>";
}else{
	echo "<script>alert('删除失败！')</script>";	
}

echo "<script>location='bookindex.php'</script>";

?>