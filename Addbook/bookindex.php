<?php
	include "../test/public/config.php";
	//$con=mysqli_connect('localhost:3306','root');
	$sql="select * from books order by bookid";
	$rst=mysqli_query($con,$sql);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<style>
		td{
			text-align: center;
		}
	</style>
</head>
<body>
	<center>
		<h3>查看书籍 | <a href="addbook.php">添加书籍</a></h3>
		<hr>
		<table width="500px" border="1" cellspacing='0'>
			<tr>
				<th>bookid</th>
				<th>书名</th>
				<th>作者</th>
				<th>出版社</th>
				<th>类型</th>
				<th>数量</th>
				<th>图片</th>
				<th>入库时间</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php
			while($row=mysqli_fetch_assoc($rst)){
				echo "<tr>";
				echo "<td>{$row['bookid']}</td>";
				echo "<td>{$row['BookName']}</td>";
				echo "<td>{$row['author']}</td>";
				echo "<td>{$row['press']}</td>";
				echo "<td>{$row['type']}</td>";
				echo "<td>{$row['number']}</td>";
				$bookimgfile="bookimg/".$row['bookid'].".jpg";
				echo "<td><img src='{$bookimgfile}'></td>";
				echo "<td>".date('Y-m-d H:i:s' ,$row['time'])."</td>";
				echo "<td><a href='editbook.php?bookid={$row['bookid']}'>修改</a></td>";
				echo "<td><a href='deletebook.php?bookid={$row['bookid']}'>删除</a></td>";
				//echo "<td><a href='edit.php?id={$row['id']}>修改</a></td>";
				//echo "<td><a href='delete.php?id={$row['id']}>删除</a></td>";
				echo "</tr>";
			}
			?>
		</table>
	</center>
</body>
</html>