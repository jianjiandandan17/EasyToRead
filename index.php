<?php
  header('content-type:text/html;charset=utf-8');
  require 'test/public/config.php';
  $sql="select * from books order by bookid";
  $rst=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($rst);

  $arrid = range(3,22);					//随机获取id,利用id获取图书图片
  $arrname=array();						
  $arrbookimgfile=array();
  shuffle($arrid);						
  $arrid = array_slice($arrid, -8);		//获取8个不重复的id

    while($row=mysqli_fetch_assoc($rst)){				//通过循环重复获取不同id
      for($i=0;$i<count($arrid);$i++){
        if($arrid[$i]==$row['bookid']){
          $arrbookimgfile[$i]="Addbook/bookimg/".$row['bookid'].".jpg";		//通过数组存放每个随机id所对应图片的相对路径
          $arrname[$i]=$row['BookName'];										//通过数组存放每个随机id所对应书名
        }
      }
    }

?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- /文档兼容模式的定义/ -->
    <!-- /viewport:显示窗口，width=device-width:显示窗口是客户端屏幕的宽度（满屏），initial-scale=1：初始比例大小：1/ -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>易读书</title>
	<!--Core CSS -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style >
        .daily_bg
        {
        	background: none repeat scroll 0 0 #ecf0f1;
        }
        .a_fc
        {
        	color:black;
        }
    </style>
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
  <!-- Header Section Start -->
	<header id="header_part">
		<div class="header_part" id="head">
			<div class="overlay">
				<div class="start_part">	
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row">
										<!-- Logo Start -->
										<div class="site_logo">
											<a href="#" title=""><img src="images/logo5.png" alt="" title=""/></a>
										</div>
										<!-- Logo End-->
										<!-- Site Title start-->	
										<div class="site_title">
											<h1>欢迎来到易读书!</h1>
											<p>Study hard， make progress every day. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---- Mao Zedong <br/>读书好比隐居山林，避开世俗的纷争，避开凡尘的喧嚣，独享一份精神的愉悦自然；读书如同归隐田园，独享着书赐予的静之美、静之馨、静之醉。读书时，你可以在溪边垂钓，亦可以在林中小憩，你可以在田间劳作，亦可以在月下独酌。<br/> 挑一本书吧！</p>
										</div>
										<!-- Site Title end-->
										<!-- Countdown start -->
										<!-- <div class="countdown wow bounceInUp">
											<div class="defaultCountdown"></div>
										</div> -->
										<!-- Countdown end-->
									</div>
								</div>
							</div>
						</div>
				</div>	
				<!-- Menu Start -->
				<div class="menu_area" id="stick_menu">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">
										<div class="collapse navbar-collapse mainnavmenu" id="bs-example-navbar-collapse-1">
										<div id="menu-center">
											<ul class="nav navbar-nav navbar-right mainnav">
												<li><a href="#header_part" >Welcome</a></li>
												<li><a href="#yi-read_section">Yi-read</a></li>
												<li><a href="#daily_section">Daily Recommend</a></li>
												<li><a href="#guess_section">Guess Like</a></li>	
											</ul>
										</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End-->
			</div>
		</div>	
	</header>
  <!-- Header Section End -->		
  <!-- About yi_Section Start -->		
	<section id="yi-read_section">
		<div class="welcome_section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">	
						<!-- About text start -->
							<div class="section-title">
								<h2>易读书</h2>
								<p>书友互动，解决书荒。</p>
							</div>
						<!-- About text end -->	
						</div>
						<!-- About service part start--> 
						
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="welcome_part wow fadeInUp">
									<div class="welcome_icon">
										<i class="fa fa-life-ring fa-4x"></i>
									</div>
									<h2><a href="http://222.24.94.243/" target="_blank" title="点击进入图书馆官网" class="a_fc">福慧图书馆</a></h2>
									<p>陕西科技大学福慧图书馆为环形桶状仿古罗马斗兽场造型、层层叠岩的建筑风格，占地6953平方米，分为地上6层、地下1层，建筑高度29.9米，建筑面积 29720平方米。它于2006年7月3日动工，建成后为西安校区的标志性建筑。 </p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="welcome_part wow fadeInDown">
									<div class="welcome_icon">
										<i class="fa fa-file-image-o fa-4x"></i>
									</div>
									<h2>我要留言</h2>
									<p>读一本好书后是不是很有感触但是却没有能交流的人呢？读一篇文章后是不是觉得晦涩难懂却没有能请教的人呢？这里可以让你认识更多志同道合的人，可以交流，可以提问，可以表达你此时的心情。 </p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="welcome_part wow fadeInRight">
									<div class="welcome_icon">
										<i class="fa fa-trophy fa-4x"></i>
									</div>
									<h2><a href="recommend.html" target="_blank" title="点击推荐图书" class="a_fc">我要推荐</a></h2>
									<p>有没有一本书看完觉得很棒想要安利给身边的人，但是他们却不想看；又或者书单都看完了，找不到可以让自己打Call的书。没关系，点这里。尽情安利，解决书荒。 </p>
								</div>
							</div>
						</div>	
						<!-- About service part end--> 
					</div>
				</div>
			</div>
		</div>
	</section>
  <!-- About Section End -->		
  <!-- About daily_Section Start -->		
	<section id="daily_section">
		<div class="welcome_section daily_bg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">	
						<!-- About text start -->
							<div class="section-title">
								<h2>每日推荐</h2>
								<p>也许你正在找这本书</p>
							</div>
						<!-- About text end -->	
						</div>
						<!-- About service part start--> 
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class="welcome_part wow fadeInLeft">
									<div class="thumbnail">
				                        <a href='#'>
 											<?php
                      						$i=0;
                         					echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                      					    ?>
				                        </a>
					                </div>
									<h2><?php echo "$arrname[$i]"; $i++;?></h2>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class="welcome_part wow fadeInLeft">
									<div class="thumbnail">
				                        <a href='#'>
				                            <?php
                            				echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        					?>
				                        </a>
					                </div>
									<h2><?php echo "$arrname[$i]"; $i++;?></h2>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class="welcome_part wow fadeInLeft">
									<div class="thumbnail">
				                        <a href='#'>
				                            <?php
                            				echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        					?>
				                        </a>
					                </div>
									<h2><?php echo "$arrname[$i]"; $i++;?></h2>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class="welcome_part wow fadeInLeft">
									<div class="thumbnail">
				                        <a href='#'>
				                            <?php
                          					echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        					?>
				                        </a>
					                </div>
									<h2><?php echo "$arrname[$i]"; $i++;?></h2>
								</div>
							</div>
						</div>	
						<!-- About service part end--> 
					</div>
				</div>
			</div>
		</div>
	</section>
  <!-- About Section-2 End -->		
  <!-- About guess_Section Start -->		
	<section id="guess_section">
		<div class="welcome_section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">	
						<!-- About text start -->
							<div class="section-title">
								<h2>猜你喜欢</h2>
								<p>不管你喜不喜欢，反正我喜欢</p>
							</div>
						<!-- About text end -->	
						</div>
						<!-- About service part start--> 
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class="welcome_part wow fadeInLeft">
									<div class="thumbnail">
				                        <a href='#'>
				                            <?php
                            				echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        					?>
				                        </a>
					                </div>
									<h2><?php echo "$arrname[$i]"; $i++;?></h2>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class="welcome_part wow fadeInLeft">
									<div class="thumbnail">
				                        <a href='#'>
				                            <?php
                            				echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        					?>
				                        </a>
					                </div>
									<h2><?php echo "$arrname[$i]"; $i++;?></h2>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class="welcome_part wow fadeInLeft">
									<div class="thumbnail">
				                        <a href='#'>
				                            <?php
                            				echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        					?>
				                        </a>
					                </div>
									<h2><?php echo "$arrname[$i]"; $i++;?></h2>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class="welcome_part wow fadeInLeft">
									<div class="thumbnail">
				                        <a href='#'>
				                            <?php
                            				echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        					?>
				                        </a>
					                </div>
									<h2><?php echo "$arrname[$i]"; $i++;?></h2>
								</div>
							</div>
						</div>	
						<!-- About service part end--> 
					</div>
				</div>
			</div>
		</div>
	</section>
  <!-- About Section-2 End -->		
   <!--Core js-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.smooth-scroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
	<!--common script init for all pages-->
    <script src="js/script.js"></script>
	<script>
	/* ==============================================
	Ajax Submiting For Email Subscriber Form.
	=====================================================================*/	
	$("#subscriber_form").submit(function(e)
	{
	$('#show_subscriber_msg').html('<div class=gen>Submiting..</div>');
	var subscriberemail = $('#subscriberemail').val();
		var formURL = $(this).attr("action");
		var data = {
					subscriberemail:subscriberemail
				   }
		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : data,
			
		 success: function (res) {
								 if(res=='1'){
									$('#show_subscriber_msg').html('<div class=gen>Thank you very much, We will notify you when we lunch</div>');
								 }
					
								 if(res=='5'){
								 $('#show_subscriber_msg').html('<div class=err>Please enter a valid email address</div>');
								 }
							}
		});
		e.preventDefault();	//STOP default action
	});
	/* ==============================================
	Ajax Submiting For Email Contact Form.
	=====================================================================*/	
	$("#contact_form").submit(function(e)
	{
	$('#show_contact_msg').html('<div class=gen>Submiting..</div>');
	var username = $('#contact_name').val();
	var useremail = $('#contact_email').val();
	var commenttext = $('#contact_text').val();
		var formURL = $(this).attr("action");
		var data = {
					username:username,
					useremail:useremail,
					commenttext:commenttext,
				   }
		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : data,
			
		 success: function (res) {
								 if(res=='1'){
									$('#show_contact_msg').html('<div class=gen>Thank you very much, We will notify you when we lunch</div>');
								 }
					
								 if(res=='5'){
								 $('#show_contact_msg').html('<div class=err>Please enter a valid email address</div>');
								 }
							}
		});
		e.preventDefault();	//STOP default action
	});
	</script>
  </body>
</html>