<!DOCTYPE html>
<html lang="en" >
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- /文档兼容模式的定义/ -->
	    <!-- /viewport:显示窗口，width=device-width:显示窗口是客户端屏幕的宽度（满屏），initial-scale=1：初始比例大小：1/ -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>易读书——我要留言</title>
		<!--Core CSS -->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/animate.css">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
		 <!-- Custom styles for this template -->
	    <link href="style.css" rel="stylesheet">
	    <link href="css/style-responsive.css" rel="stylesheet">
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>
    <body >
        <!-- Contact Section Start -->  
		<section id="contact_section">
			<div class="contact_section">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						    <div class="row">
								<div class="section-title">
									<h2>我要留言</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<?php

										require 'db_conn.php';

										$num_rec_per_page = 4; //每页显示的数量
										if (isset($_GET["page"]))
										{
											$page = $_GET["page"];
										}
										else
										{
											$page = 1;
										}
										$start_from = ($page - 1) * $num_rec_per_page;
										$sql_m = "SELECT * FROM yds2_comment ORDER BY id DESC LIMIT $start_from, $num_rec_per_page ";
										$rs_result = mysqli_query($conn, $sql_m); //查询数据

										if (mysqli_num_rows($rs_result) > 0)
										{
											while($row = mysqli_fetch_assoc($rs_result))
											{
												//echo $row["mes_id"];
												echo "第{$row["id"]}楼<br>";
												echo $row["nick_name"] . ' 说：';
												echo '&nbsp;' . $row["message"] . "<br>";
												echo '<small>' . $row["com_time"] . '</small>';
												//echo "<a href='delete.php?mes_id=" . $row['mes_id'] . "'>删除</a>";
												echo '<hr>';
											}
										}
										else
										{
											echo "0结果<br>";
										}
										
										$total_records = mysqli_num_rows($rs_result); //统计总记录数
										$total_pages = ceil($total_records / $num_rec_per_page); //计算总页数

										echo "<a href='$_SERVER[PHP_SELF]?page=1'>" . '首页&nbsp;' . "</A>"; //第一页

										for ($i=1; $i<=$total_pages; $i++)
										{
											echo "<a href = '$_SERVER[PHP_SELF]?page=" . $i . "'>" . $i . "</a>";
											echo "&nbsp;&nbsp;";
										}

										echo "<a href='$_SERVER[PHP_SELF]?page=$total_pages'>" . '&nbsp;末页' . "</a>"; //最后一页

										?>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="contact_form">
										<div id="show_contact_msg"></div>
									<!-- Contact Form Start -->
										<form method="post" id="yds2_com" action="add_com.php">
											<input type="text" id="nick_name" name="nick_name" class="form-control contact_input_box wow fadeInUp" placeholder="昵称" required/>
											<input type="text" id="class_name" name="class_name" class="form-control contact_input_box wow fadeInUp" placeholder="学院" required/>
											<input type="email" id="contact_email" name="email" class="form-control contact_input_box wow fadeInUp" placeholder="E-mail" required/>
											<textarea id="contact_text" name="message" rows="5" cols="30" class="form-control contact_input_box wow fadeInUp" placeholder="留言" required></textarea>
											<button type="submit" class="btn btn-primary contact_button wow fadeInUp"> <i class="fa fa-send-o"></i>  Send message</button>
										</form>
									<!-- Contact Form End -->
									</div>
								</div>
						</div>
					</div>
				</div>
				</div>	
			</div>	
		</section>
	    <!-- Contact Section End -->	
	    <!--Core js-->
	    <script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/jquery.smooth-scroll.js"></script>
	    <script src="js/wow.min.js"></script>
	    <script src="js/jquery.nicescroll.min.js"></script>
	    <script src="js/jquery.countdown.min.js"></script>
		<!--common script init for all pages-->
	    <script src="js/script.js"></script>
    </body>
</html>