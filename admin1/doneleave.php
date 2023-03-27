<?php
session_start();
include('connection.php');
$ml=$_GET['ml'];

$sql4="UPDATE tbl_mleave set status='accepted' where ml='$ml'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = "leave accepted sucessfully";
}
header("Location: viewleave.php");
?>