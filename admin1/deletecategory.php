<?php
session_start();
$id=$_GET["c_id"];
include '../connection.php';
$sql2="UPDATE `tbl_category` SET STATUS='inactive' WHERE c_id='$id'";
 mysqli_query($conn, $sql2);
header("location:manage_category.php");
?>