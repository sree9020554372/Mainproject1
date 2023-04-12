<?php 
include('connection.php');

session_start(); // Starting the session

$a=$_SESSION['username'];

if(isset($a))
    {
    $sql="SELECT username FROM tb_login WHERE login_id='$login_id'";
  
   }
if(isset($_POST['payment_id']) && isset($_POST['price'])){
   // $payment_id=$_POST['payment_id'];
   $payment_id = isset($_POST['$payment_id']) ? $_POST['$payment_id'] : '';
   $price = isset($_POST['$price']) ? $_POST['$price'] : '';
   //$payment_status= isset($_POST['$payment_status']) ? $_POST['$payment_status'] : '';
    // $price=$_POST['price'];
     $payment_status="completed";
    
    mysqli_query($conn,"INSERT INTO `tbl_payement`(`payment_id`, `username`, `price`,`payment_status`)
     VALUES ('$payment_id', '$a', '$price', '$payment_status')");
}
?>


<!-- <php 
include('connection.php');

session_start(); // Starting the session

if(isset($_SESSION['username'])) {
    $a = $_SESSION['username'];
    if(isset($_POST['payment_id']) && isset($_POST['price'])) {
        $payment_id = $_POST['payment_id'];
        $price = $_POST['price'];
        $payment_status = "completed";
        
        // Sanitize user inputs to prevent SQL injection attacks
        $username = mysqli_real_escape_string($conn, $username);
        $payment_id = mysqli_real_escape_string($conn, $payment_id);
        $price = mysqli_real_escape_string($conn, $price);
        $payment_status = mysqli_real_escape_string($conn, $payment_status);

        // Insert the payment data into the tbl_payement table
        $insert_query = "INSERT INTO tbl_payement(payment_id, username, price, payment_status) VALUES ('$payment_id', '$a', '$price', '$payment_status')";
        $insert_result = mysqli_query($conn, $insert_query);

        if($insert_result) {
            echo "Payment data inserted successfully!";
        } else {
            echo "Error inserting payment data: " . mysqli_error($conn);
        }
    } else {
        echo "Payment ID and Price are required!";
    }
} else {
    echo "Please log in to continue!";
}
?> -->


