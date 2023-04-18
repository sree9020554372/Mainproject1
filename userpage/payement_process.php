<?php 
include('connection.php');

session_start(); // Starting the session

$a=$_SESSION['username'];
$q="select login_id from tb_login where username='$a'";
    $res=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($res);
    $login_id= $row['login_id'];

if(isset($_POST['payment_id']) && isset($_POST['amount'])){
    $payment_id=$_POST['payment_id'];
    echo $payment_id;
    $price=$_POST['amount'];
   //$payment_status= isset($_POST['$payment_status']) ? $_POST['$payment_status'] : '';
    // $price=$_POST['price'];
     $payment_status="completed";
    
    mysqli_query($conn,"INSERT INTO `tbl_payement`( `username`, `price`,`payment_status`)
     VALUES ( '$a', '$price', '$payment_status')");
}
?>


