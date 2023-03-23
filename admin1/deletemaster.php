<?php
session_start();
$mid=$_GET["mid"];
include '../connection.php';
$sql2="UPDATE `tbl_master` SET STATUS='inactive' WHERE mid='$mid'";
 mysqli_query($conn, $sql2);
header("location:manage_master.php");
?>