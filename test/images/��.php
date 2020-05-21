<?php
	include "../common/config.php";

	$sql="select *from user order by id";

	$rst=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>我</title>
	<link rel="stylesheet" href="../css/WO.css">
</head>
<body>
	<div id="header">
		<center>
			<img src="./wo-logo.jpg" class="pic1"  />
		</center>
		<div id="land">
			<a>欢迎<?php echo$COOKIE['username'] ?> |</a><a href="logout.php">退出</a>
		</div>
	</div>
	<div id="main">
		<div id="header1"></div>
		<div id="Left">
			<div class="left1">
				<h3>个人中心</h3>
				<a href="">我的主页</a>
				<a href="">我的书桌</a>
				<a href="">我的笔记</a>
				<a href="">我的书评</a>
				<a href="">修改信息</a>
			</div>
		</div>
		<div id="Right">
			<div class="Rleft">
				<th>用户名：</th>
				<th>姓名：</th>
				<th>性别：</th>
				<th>班级：</th>
				<th>学号：</th>
				<th>注册时间：</th>
				<?php 
					while($row=mysqli_fetch_assoc($rst)){
						echo "<td>{$row['username']}</td>";
						echo "<td>{$row['name']}</td>";
						echo "<td>{$row['sex']}</td>";
						echo "<td>{$row['class']}</td>";
						echo "<td>{$row['studentid']}</td>";
						echo "<td>".date('Y-m-d H:i:s' ,$row['time'])."</td>";
					}
				?>
			</div>
			<div class="Rright">
				<div class="Rtop">
					<h3>最近阅读</h3>
				</div>
			</div>
			<div class="Rfooter">
				<div class="Rtop1">
					<h3>最近收藏</h3>
				</div>
			</div>
		</div>
	</div>
	<div id="footer"></div>
</body>
</html>