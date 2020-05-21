<?php
	include "../public/config.php";
	$id=$_GET['id'];

	$sql="select * from user where id={'$id'}";
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
	<h3>修改用户</h3>
	<hr>
	<form action="upd.php" method="post">
		<p>用户名：</p>
		<p><input type="text" name="username" value="<?php echo $row['username'] ?>" /></p>
		<p>密码：</p>
		<p><input type="text" password="password" value="<?php echo $row['password'] ?>" /></p>
		<p>
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<input type="submit" value="提交" />
			<input type="reset" value="重置" />
		</p>
	</form>
</body>
</html>