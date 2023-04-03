<?php
session_start();
include('connection.php');
$id=$_REQUEST['id'];

$sql4="UPDATE tbl_category set status='1' where c_id='$id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = "Category activated successfully";
}
header("Location: manage_category.php");
?>