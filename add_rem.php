<?php

session_start();

header("content-type:text/html; charset=utf-8");

require 'db_conn.php';

$book_name = $_POST["book_name"];
//$class_name = $_POST["class_name"];
$email = $_POST["email"];
$reason = $_POST["reason"];
$rem_time = time();

$sql = "INSERT INTO yds2_recommend (book_name, email, reason, rem_time) VALUES ('{$book_name}', '{$email}', '{$reason}', now())";

if (mysqli_query($conn, $sql))
{
    header("location: recommend.html");
}
else
{
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>