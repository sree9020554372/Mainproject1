<?php
session_start();
$ml=$_GET["ml"];
include '../connection.php';
$sql2="UPDATE `tbl_mleave` SET STATUS='inactive' WHERE ml='$ml'";
 mysqli_query($conn, $sql2);
header("location:viewleave.php");
?>