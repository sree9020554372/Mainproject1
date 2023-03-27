<?php 
include('connection.php');
$a=$_SESSION['username'];

if(isset($_POST['payment_id']) && isset($_POST['amount'])){
    $payment_id=$_POST['payment_id'];
    $amount=$_POST['amount'];
   
    $payment_status="completed";
    
   
    mysqli_query($conn,"INSERT INTO `tbl_payement`( `payment_id`,`username`,`amount`,`payment_status`)
     VALUES ('$payment_id','$a','$amount', '$payment_status')");
    
}
?>