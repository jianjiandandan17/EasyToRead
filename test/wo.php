<?php  
	include "public/config.php";
	//$con=mysqli_connect('localhost:3306','root');
	//$sql="select * from user order by id";
	$id=$_GET['id'];
	$sql="select * from user where id={$id}";
	$rst=mysqli_query($con,$sql);

	if(!$_COOKIE['userid']){
		echo "<script>location='login.php'</script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>我</title>
	<link rel="stylesheet" href="css/WO.css">
</head>
<body>
	<div id="header">
		<center>
			<img src="images/wo-logo.jpg" class="pic1"  />
		</center>
		<div id="land">
			<a>欢迎<?php echo $COOKIE['username'] ?> |</a><a href="logout.php">退出</a>
		</div>
	</div>
	<div id="main">
		<div id="header1"></div>
		<div id="Left">
			<div class="left1">
				<h3>个人中心</h3>
				<a href="wp.php">我的主页</a>
				<a href="desk.php">我的书桌</a>
				<a href="">我的笔记</a>
				<a href="">我的书评</a>
				<a href="">修改信息</a>
			</div>
		</div>
		<div id="Right">
			<div class="Rleft">
				<div class="RRright">
					<?php 
						while($row=mysqli_fetch_assoc($rst)){
							echo "<td>{$row['uimg']}</td>";
							echo "头像";
							echo "用户名：<td>{$row['username']}</td>&nbsp";
							echo "姓名：<td>{$row['name']}</td>&nbsp";
							echo "性别：<td>{$row['sex']}</td>&nbsp";
							echo "班级：<td>{$row['class']}</td>&nbsp";
							echo "学号：<td>{$row['studentid']}</td>&nbsp";
							echo "注册时间：<td>".date('Y-m-d H:i:s' ,$row['time'])."</td>";
						}
					?>
				</div>
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