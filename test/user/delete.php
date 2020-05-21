<?php
header('content-type:text/html;charset=utf-8');
include "../public/config.php";

$id=$_GET['id'];
$sql="delete from user where id={$id}";

if(mysqli_query($con,$sql)){
	echo "<script>alert('删除成功！')</script>";
}else{
	echo "<script>alert('删除失败！')</script>";	
}

echo "<script>location='biao.php'</script>";

?>