<?php
session_start();
$shid=$_GET["shid"];
include '../connection.php';
$sql2="UPDATE `tbl_shedule` SET STATUS='inactive' WHERE shid='$shid'";
 mysqli_query($conn, $sql2);
header("location:manage_shedule.php");
?>