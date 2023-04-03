<?php
session_start();
include('connection.php');
$id=$_REQUEST['id'];

$sql3="UPDATE tbl_category set status='0' where c_id='$id'";
if(mysqli_query($conn,$sql3))
{
    $_SESSION['msg'] = "Category deactivated successfully";
}
header("Location: manage_category.php");
?>