<?php

include("connection.php");
?>

<form action="" method="POST">

<div class="container" style="margin-left:250px;">
<?php
if(isset($_GET['ml']))
{
 $ml=$_GET['ml'];
  $result=mysqli_query($conn,"UPDATE  tbl_mleave SET status='rejected' where ml=$ml");
  
}
if($result)
{
echo "<script>alert(' removed successfully. Thank you');window.location='viewleave.php';</script>";
}
?>