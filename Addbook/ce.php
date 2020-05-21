



<?php
//	error_reporting( E_ALL&~E_NOTICE );
/*
  	require '../test/public/config.php';
  	$sql="select * from books order by bookid";
  	$rst=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($rst);

	$arrid = range(2,20);
	$arrname=array();
	$arrbookimgfile=array();
    shuffle($arrid);
	$arrid = array_slice($arrid, -9);
/*
	for($i=0;$i<9;$i++){
		echo "$arrid[$i]";
		echo "<br/>";
	}

		while($row=mysqli_fetch_assoc($rst)){
			for($i=0;$i<count($arrid);$i++){
				if($arrid[$i]==$row['bookid']){
					echo "$arrid[$i]";
					echo "   ";
					$arrbookimgfile[$i]="bookimg/".$row['BookName'].".jpg";
					$arrname[$i]=$row['BookName'];
					echo "$arrbookimgfile[$i]";
					echo "    ";
					echo "$arrname[$i]";
					echo "    <br/>";
				}
			}
		}
/*
	$arrid=array();
	$arrname=array();
	$arrbookimgfile=array();
	for($i=0;$i<count($arrid);$i++){
		$arrid[$i]=rand(2,20);
		echo "$arrid[$i]";
		while($row=mysqli_fetch_assoc($rst)){
			if($arrid[$i]==$row['bookid']){
				$arrbookimgfile[$i]="bookimg/".$row['BookName'].".jpg";
				$arrname[$i]=$row['BookName'];
			}
		}
		echo $arrname[$i];
		echo "$arrbookimgfile[$i]";
	}

/*
	$tmp = array ();
	while ( count ( $tmp ) < 10 ) {
		$tmp [] = mt_rand ( 2, 20 );
    	$tmp = array_unique ( $tmp );
	}
	for($i=0;$i<count($tmp);$i++){
		echo "$tmp[$i]";
		echo "<br/>";
	}
/*
	$tmp = array ();
	while ( count ( $tmp ) < 9 ) {
    	$tmp [] = mt_rand ( 2, 20 );
    	$tmp = array_unique ( $tmp );
	}
	for($i=0;$i<count($tmp);$i++){
		echo "$tmp[$i]";
		echo "<br/>";
	}


/*
	$arrid=array();
	$arrname=array();
	$arrbookimgfile=array();
	for($i=0;$i<count($arrid);$i++){
		$arrid[$i]=rand(2,20);
		echo "$arrid[$i]";
		while($row=mysqli_fetch_assoc($rst)){
			if($arrid[$i]==$row['bookid']){
				$arrbookimgfile[$i]="bookimg/".$row['BookName'].".jpg";
				$arrname[$i]=$row['BookName'];
			}
		}
		echo $arrname[$i];
		echo "$arrbookimgfile[$i]";
	}


/*
	$ra=rand(1,20);
	while($row=mysqli_fetch_assoc($rst)){
		if($ra==$row['bookid']){
			$bookimgfile="bookimg/".$row['BookName'].".jpg";
    		echo "<img src='{$bookimgfile}'>";
    		echo '<br/>';
    		echo "{$row['BookName']}";
		}
	}
	echo "<br/>";
	$rb=rand(1,20);
	while($row=mysqli_fetch_assoc($rst)){
		if($rb==$row['bookid']){
			$bookimgfile="bookimg/".$row['BookName'].".jpg";
    		echo "<img src='{$bookimgfile}'>";
    		echo '<br/>';
    		echo "{$row['BookName']}";
		}
	}
*/
?>