<?php

include("connection.php");
?>

<form action="" method="POST">

<div class="container" style="margin-left:250px;">
<?php
if(isset($_GET['aid']))
{
 $aid=$_GET['aid'];
  $result=mysqli_query($conn,"UPDATE  tbl_attend SET status='absent' where aid=$aid");
  
}
if($result)
{
echo "<script>alert(' absent recorded successfully. Thank you');window.location='manageA1.php.php';</script>";
}
?>

