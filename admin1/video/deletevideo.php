<?php
session_start();
$video_id=$_GET["video_id"];
include 'conn.php';
$sql2="UPDATE `video` SET STATUS='inactive' WHERE video_id='$video_id'";
 mysqli_query($conn, $sql2);
header("location:index.php");
?>