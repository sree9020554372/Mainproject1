
<?php
session_start();
include'../connection.php';
if(isset($_POST['b']))
{

$cpass=$_POST['cpass'];
$npass=$_POST['pass'];
$id=$_SESSION['id'];
$q1="update login set password='$npass' where loginid=$id";
$res1=mysqli_query($con,$q1);
}
?>
<script>
alert("Your Password is Changed");
window.location='change-password.php';
</script>



