<?php
  header('content-type:text/html;charset=utf-8');
  require 'public/config.php';
  $sql="select * from books order by bookid";
  $rst=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($rst);

  $arrid = range(2,20);
  $arrname=array();
  $arrbookimgfile=array();
  shuffle($arrid);
  $arrid = array_slice($arrid, -9);

    while($row=mysqli_fetch_assoc($rst)){
      for($i=0;$i<count($arrid);$i++){
        if($arrid[$i]==$row['bookid']){
          $arrbookimgfile[$i]="../Addbook/bookimg/".$row['bookid'].".jpg";
          $arrname[$i]=$row['BookName'];
        }
      }
    }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<title>易读书</title>
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
/* Custom Styles */
    ul.nav-tabs{
        width: 140px;
        margin-top: 20px;
        border-radius: 4px;
        border: 1px solid #ddd;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
    }
    ul.nav-tabs li{
        margin: 0;
        border-top: 1px solid #ddd;
    }
    ul.nav-tabs li:first-child{
        border-top: none;
    }
    ul.nav-tabs li a{
        margin: 0;
        padding: 8px 16px;
        border-radius: 0;
    }
    ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
        color: #fff;
        background: #0088cc;
        border: 1px solid #0088cc;
    }
    ul.nav-tabs li:first-child a{
        border-radius: 4px 4px 0 0;
    }
    ul.nav-tabs li:last-child a{
        border-radius: 0 0 4px 4px;
    }
    ul.nav-tabs.affix{
        top: 30px; /* Set the top position of pinned element */
    }
</style>
<script>
$(document).ready(function(){
    $("#myNav").affix({
        offset: { 
            top: 125 
      }
    });
});
</script>
</head>
<body data-spy="scroll" data-target="#myScrollspy">
<div class="container">
   <div class="jumbotron">
        <a>欢迎<?php echo $COOKIE['username'] ?> |</a><a href='wo.php?id={$row['id']}'>  我  |</a><a href="logout.php">  退出  </a>
        <h1>易读书</h1>
        <blockquote>读书使人心明眼亮。
            <small>伏尔泰</small>
        </blockquote>
        <blockquote>读书何所求?将以通事理。
            <small>张维屏</small>
        </blockquote>
        <blockquote>读书使人充实，讨论使人机智，笔记使人准确，读史使人明智，读诗使人灵秀，数学使人周密，科学使人深刻，伦理使人庄重，逻辑修辞使人善辩。凡有所学，皆成性格。
            <small>培根</small>
        </blockquote>
    </div>
    <div class="row">
        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked" id="myNav">
                <li class="active"><a href="#section-1">图书馆</a></li>
                <li><a href="#section-2">阅读排行榜</a></li>
                <li><a href="#section-3">每日推荐</a></li>
                <li><a href="#section-4">猜你喜欢</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <div class="page-header">
                <a href="#" title="点击进入图书馆官网">
                    <h2 id="section-1">图书馆
                        <small>福慧图书馆</small>
                    </h2>
                </a>
            </div>
            <p>陕西科技大学福慧图书馆为环形桶状仿古罗马斗兽场造型、层层叠岩的建筑风格，占地6953平方米，分为地上6层、地下1层，建筑高度29.9米，建筑面积 29720平方米。它于2006年7月3日动工，建成后为西安校区的标志性建筑。</p>
            <p>经过半个世纪的发展及长期积累，学校图书馆形成了文理兼收、多种文献载体并存、轻工类图书文献资源颇为丰富的多学科藏书体系。截止2006年底，图书馆拥有纸质图书116.5万册，共享图书40万册；电子图书45万册；中外文纸质现刊1185种；中外文电子期刊13082种；网络和光盘数据库16个，自建文献数据库10个。</p>
            <p>学校图书馆是国内较早从事计算机应用的高校图书馆。1993年开发了中文编目及流通管理系统，并正式投入实际使用。1996年11月引进深圳图书馆研制的“图书馆自动化集成系统(ILAS)，全面更新了图书馆管理系统，实现了图书馆管理的全面计算机化。2002年10月，图书馆自动化集成系统升级为ILASII2.0。</p>
            <p>贴近读者、服务师生是图书馆一贯坚持的服务方针。拥有多种现代化服务手段的图书馆，可为读者提供外借、阅览、听音收视、参考咨询、文献检索、定题服务、课题查新、读者教育、馆际互借、文献复制、文献传递等多类型、多层次的服务。2006年实现了咸阳、西安两校区图书的通借通还。从2004年以来，每年举办“文明礼貌月”优质服务活动，均获得较好效果。</p>
            <p>图书馆发挥自身的教育功能，为全校本、专科生开设《文献检索与利用》课程，大大提高了学生的信息素质。全校读者2006年下载的中、外文电子期刊全文已过百万篇，我校电子资源的利用率在陕西省高校中保持较高水平。陕西科技大学2005、2006年度连续获得陕西省CNKI数据库“最佳应用单位”；2006年度清华同方全文下载量位居陕西高校第三、万方使用量排名位居陕西高校第五。对文献资源的旺盛需求，也预示着我校教学科研事业蓬勃发展的势头。</p>
            <p>经过不断的建设和发展，陕西科技大学图书馆丰富的馆藏和良好的网络信息服务平台是莘莘学子博览群书、涉猎各科知识、获取各种信息的重要场所。现代信息服务环境下的图书馆员将以爱岗敬业和热情周到的服务为学校的学科建设、教学研究、人才培养做出更大的努力和贡献。</p>
            <hr>
            <div class="page-header">
                <h2 id="section-2">阅读排行榜
                    <small>人气决定一切</small>
                </h2>
            </div>
            
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <?php
                        $i=0;
                          echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        ?>
                        <div class="caption">
                        <h3><?php echo "$arrname[$i]"; $i++;?></h3>
                        <input type="submit" value="喜欢" onclick="document.getElementById('count').innerHTML=parseInt(document.getElementById('count').innerHTML)+1">
                        <span id="count">1</span>
                      </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <?php
                          echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        ?>
                        <div class="caption">
                          <h3><?php echo "$arrname[$i]"; $i++;?></h3>
                        <input type="submit" value="喜欢" onclick="document.getElementById('count').innerHTML=parseInt(document.getElementById('count').innerHTML)+1">
                        <span id="count">1</span>
                      </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <?php
                          echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        ?>
                        <div class="caption">
                          <h3><?php echo "$arrname[$i]"; $i++;?></h3>
                        <input type="submit" value="喜欢" onclick="document.getElementById('count').innerHTML=parseInt(document.getElementById('count').innerHTML)+1">
                        <span id="count">1</span>
                        </div>
                  </div>
                </div>
            </div>
            <hr>
            <div class="page-header">
                <h2 id="section-3">每日推荐
                    <small>也许你正在找这本书</small>
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <?php
                          echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        ?>
                        <div class="caption">
                          <h3><?php echo "$arrname[$i]"; $i++;?></h3>
                        <input type="submit" value="喜欢" onclick="document.getElementById('count').innerHTML=parseInt(document.getElementById('count').innerHTML)+1">
                        <span id="count">1</span>
                      </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <?php
                          echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        ?>
                        <div class="caption">
                          <h3><?php echo "$arrname[$i]"; $i++;?></h3>
                        <input type="submit" value="喜欢" onclick="document.getElementById('count').innerHTML=parseInt(document.getElementById('count').innerHTML)+1">
                        <span id="count">1</span>
                      </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <?php
                          echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        ?>
                        <div class="caption">
                          <h3><?php echo "$arrname[$i]"; $i++;?></h3>
                        <input type="submit" value="喜欢" onclick="document.getElementById('count').innerHTML=parseInt(document.getElementById('count').innerHTML)+1">
                        <span id="count">1</span>
                      </div>
                  </div>
                </div>
            </div>
            <hr>
            <div class="page-header">
                <h2 id="section-4">猜你喜欢
                    <small>不管你喜不喜欢，反正我喜欢</small>
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <?php
                          echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        ?>
                        <div class="caption">
                          <h3><?php echo "$arrname[$i]"; $i++;?></h3>
                        <input type="submit" value="喜欢" onclick="document.getElementById('count').innerHTML=parseInt(document.getElementById('count').innerHTML)+1">
                        <span id="count">1</span>
                      </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <?php
                          echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        ?>
                        <div class="caption">
                          <h3><?php echo "$arrname[$i]"; $i++;?></h3>
                        <input type="submit" value="喜欢" onclick="document.getElementById('count').innerHTML=parseInt(document.getElementById('count').innerHTML)+1">
                        <span id="count">1</span>
                      </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <?php
                          echo "<img src='{$arrbookimgfile[$i]}' width='190' height='274'>";
                        ?>
                        <div class="caption">
                          <h3><?php echo "$arrname[$i]"; $i++;?></h3>
                        <input type="submit" value="喜欢" onclick="document.getElementById('count').innerHTML=parseInt(document.getElementById('count').innerHTML)+1">
                        <span id="count">1</span>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
