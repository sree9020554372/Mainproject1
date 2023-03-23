<?php
session_start();
$cid=$_GET["cid"];
include '../connection.php';
$sql2="UPDATE `tbl_course` SET STATUS='inactive' WHERE cid='$cid'";
 mysqli_query($conn, $sql2);
header("location:viewcourse.php");
?>