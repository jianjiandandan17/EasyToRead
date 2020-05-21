<?php

$db_ip = "47.93.58.235";
$db_username = "root";
$db_password = "15122743012ggc";
$db_name = "comment3";

$conn = mysqli_connect($db_ip, $db_username, $db_password, $db_name);
if (!$conn)
{
	die("Could not connect:" . mysqli_error());
}

?>