<?php

session_start();

header("content-type:text/html; charset=utf-8");

require 'db_conn.php';

$nick_name = $_POST["nick_name"];
$class_name = $_POST["class_name"];
$email = $_POST["email"];
$message = $_POST["message"];
$com_time = time();

$sql = "INSERT INTO yds2_comment (nick_name, class_name, email, message, com_time) VALUES ('{$nick_name}', '{$class_name}', '{$email}', '{$message}', now())";

if (mysqli_query($conn, $sql))
{
    header("location: comment.php");
}
else
{
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>