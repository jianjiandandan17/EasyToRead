<?php
	include "../public/config.php";
	//$con=mysqli_connect('localhost:3306','root');
	$sql="select * from user order by id";
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
		<h3>查看用户 | <a href="add.php">添加用户</a></h3>
		<hr>
		<table width="500px" border="1" cellspacing='0'>
			<tr>
				<th>ID</th>
				<th>用户名</th>
				<th>密码</th>
				<th>姓名</th>
				<th>性别</th>
				<th>班级</th>
				<th>学号</th>
				<th>注册时间</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php
			while($row=mysqli_fetch_assoc($rst)){
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>{$row['username']}</td>";
				echo "<td>{$row['password']}</td>";
				echo "<td>{$row['name']}</td>";
				echo "<td>{$row['sex']}</td>";
				echo "<td>{$row['class']}</td>";
				echo "<td>{$row['studentid']}</td>";
				echo "<td>".date('Y-m-d H:i:s' ,$row['time'])."</td>";
				echo "<td><a href='edit.php?id={$row['id']}'>修改</a></td>";
				echo "<td><a href='delete.php?id={$row['id']}'>删除</a></td>";
				//echo "<td><a href='edit.php?id={$row['id']}>修改</a></td>";
				//echo "<td><a href='delete.php?id={$row['id']}>删除</a></td>";
				echo "</tr>";
			}
			?>
		</table>
	</center>
</body>
</html>