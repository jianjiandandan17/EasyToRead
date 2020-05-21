<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加书籍图片</title>
</head>
<body>
	<h3>添加书籍图片</h3>
	<hr>
	<form action="insertbookimg.php" method="post" enctype="multipart/form-data">
		<p>书籍图片：</p>
		<p><input type="file" name="bookimg"></p>
		<p>
		<input type="submit" name="提交">
		<input type="reset" name="重置">
		</p>
	</form>
</body>
</html>