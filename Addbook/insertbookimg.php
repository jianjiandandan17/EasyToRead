<?php
    header("content-type:text/html;charset=utf-8");
//    include "../test/public/config.php";
    //$con=mysqli_connect('localhost:3306','root');
//    $sql="select * from books order by BookName";
//    $rst=mysqli_query($con,$sql);
//    $row=mysqli_fetch_assoc($rst);
//    $bookname=$row['BookName'];


    $bookimg=$_FILES['bookimg'];
    $ext=explode(".",$bookimg['name']);
    $extName=end($ext);
    if($extName!="jpg"){
        echo "文件类型不对<a href='addBookImg.php'>返回</a>";
        exit;
    }
    if($bookimg["size"]>2000000){
        echo "文件太大<a href='addBookImg.php'>返回</a>";
        exit;
    }
    $dir="bookimg/";
 //   $fileName=$bookname.".".$extName;
 //   $uploadUrl=$dir.$fileName;
    $uploadUrl=$dir.$bookimg['name'];
    echo $uploadUrl;
    move_uploaded_file($bookimg["tmp_name"],$uploadUrl);
    echo "<script>alert('添加成功！)</script>";
    echo "<script>location='bookindex.php'</script>";
?>