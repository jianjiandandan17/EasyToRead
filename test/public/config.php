<?php
	$con=mysqli_connect('localhost:3306','root','c8c20dbc9d');

	mysqli_select_db($con,'test');

	//mysqli_set_charset($con,'utf8');
	mysqli_query($con,'set names utf8');
?>