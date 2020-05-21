<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加书籍</title>
</head>
<body>
	<h3>添加书籍</h3>
	<hr>
	<form action="insertbook.php" method="post">
		<p>书名：</p>
		<p><input type="text" name="BookName"></p>
		<p>作者：</p>
		<p><input type="text" name="author"></p>
		<p>出版社：</p>
		<p><input type="text" name="press"></p>
		<p>类型：</p>
		<p><input type="text" name="type"></p>
		<p>数量：</p>
		<p><input type="text" name="number"></p>
		<p>
		<input type="submit" name="提交">
		<input type="reset" name="重置">
		</p>
	</form>
</body>
</html>