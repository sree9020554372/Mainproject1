<?php
session_start();
include('connection.php');
$aid=$_GET['aid'];

$sql4="UPDATE tbl_attend set status='approve' where aid='$aid'";
// if(mysqli_query($conn,$sql4))
// {
//     $_SESSION['msg2'] = "leave accepted sucessfully";
//     echo "<script>alert('leave accepted sucessfully');</script>"; 
    
// }

if(mysqli_query($conn,$sql4)){
    echo "<script>alert(' absent.');</script>"; 
        echo "<script>window.location.href = 'manageA1.php'</script>";   

}
else
{
echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
}


?>