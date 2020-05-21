<?php
	include "../test/public/config.php";

	$sql="select * from user order by id";
	$rst=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>书评</title>
</head>
<body>
	<center>
		<h3>首页          <a href="logon.php">登录</a> | <a href="adduser.php">注册</a></h3>
	</center>
		<hr>
		<?php
		while($row=mysqli_fetch_assoc($rst)){
			echo "<p>用户名：{$row['username']}</p>";
			echo "<p>标 题：{$row['title']}</p>";
			echo "<p>内 容：{$row['content']}</p>";
			echo "<p>"."日 期：".date('Y-m-d H:i:s' ,$row['time'])."</p>";
		}
		?>
</body>
</html>