<?php 
include('connection.php');
$a=$_SESSION['username'];
if(isset($_POST['payment_id']) && isset($_POST['price'])){
    $payment_id=$_POST['payment_id'];
    $price=$_POST['price'];
   // $nme=$_POST['name'];
    $payment_status="completed";
    
   
    mysqli_query($conn,"INSERT INTO `tbl_payement`(`payment_id`, `username`, `price`,`payment_status`)
     VALUES ('$payment_id', '$a', '$price', '$payment_status')");
    
}
?>
