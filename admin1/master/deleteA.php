<?php
session_start();
$aid=$_GET["aid"];
include '../connection.php';
$sql2="UPDATE `tbl_attend` SET STATUS='inactive' WHERE aid='$aid'";
 mysqli_query($conn, $sql2);
header("location:manageA.php");
?>