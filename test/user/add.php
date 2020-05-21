<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index</title>
</head>
<body>
	<h3>添加用户</h3>
	<hr>
	<form action="insert.php" method="post">
  		<p>用户名：</p>
  		<P><input type="text" name="username" /></P>
  		<p>密码：</p>
  		<P><input type="text" name="password" /></P>
  		<p>姓名：</p>
  		<p><input type="text" name="name"></p>
  		<p>性别：</p>
  		<p><input type="text" name="sex"></p>
  		<p>班级：</p>
  		<p><input type="text" name="class"></p>
  		<p>学号：</p>
  		<p><input type="text" name="studentid"></p>
		  <p>
  			<input type="submit" value="提交" />
  			<input type="reset" value="重置">
  		</p>
	</form>
</body>
</html>