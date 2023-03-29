<?php
session_start();
$leaveid=$_GET["leaveid"];
include '../connection.php';
$sql2="UPDATE `tbl_leave` SET STATUS='inactive' WHERE leaveid='$leaveid'";
 mysqli_query($conn, $sql2);
header("location:viewleave.php");
?>