<?php
	include "../test/public/config.php";
	$bookid=$_GET['bookid'];
	$sql="select * from books where bookid={$bookid}";
	//$sql="select * from user order by id";
	//$sql="select * from user where id={$id}";
	$rst=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($rst);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index</title>
</head>
<body>
	<h3>修改书籍</h3>
	<hr>
	<form action="updbook.php" method="post">
		<p>书名：</p>
		<p><input type="text" name="BookName" value="<?php echo $row['BookName'] ?>" /></p>
		<p>作者：</p>
		<p><input type="text" name="author" value="<?php echo $row['author'] ?>" /></p>
		<p>出版社：</p>
		<p><input type="text" name="press" value="<?php echo $row['press'] ?>" ></p>
		<p>类型：</p>
		<p><input type="text" name="type" value="<?php echo $row['type'] ?>" ></p>
		<p>数量：</p>
		<p><input type="text" name="number" value="<?php echo $row['number'] ?>" ></p>
		<p>
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<input type="submit" value="提交" />
			<input type="reset" value="重置" />
		</p>
	</form>
</body>
</html>