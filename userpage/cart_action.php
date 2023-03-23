 <?php
 include '../connection.php';
 if(isset($_POST['cart'])){
    session_start(); 
    $uid = $_SESSION['id'];
    $sid = $_GET['fid'];
    $sql = mysqli_query($con,"SELECT * from food where fid='$sid'");
    $data=mysqli_fetch_array($sql);
    $imageurl='images'.$data["file"];
    $pname=$data["name"];
    $pprice=$data["price"];
	$location=$_POST["location"];
    $quantity=$_POST['quantity'];
	$suss=mysqli_query($con,"SELECT * from tbl_cart where fid='$sid' and status=1 and loginid='$uid'");
	$hh=mysqli_num_rows($suss);
	if($hh > 0){
	echo"<script>alert('Item already exists');</script>"; 
    echo"<script>window.location='cart.php';</script>";
	}else{
	
    $product = "SELECT * from food where fid='$sid'";
    $products = mysqli_query($con,$product);
    $totalprice=0;
    $totalprice=$quantity*$pprice;
     $sql2 = "INSERT INTO `tbl_cart`(`loginid`,`fid`,`quantity`,`price`,`location`,`totalprice`,`status`) VALUES('$uid','$sid','$quantity','$pprice','$location','$totalprice',1)";
       $food = mysqli_query($con,$sql2);
	}
	  
   
       if (!$food) {
        echo "Error: " . mysqli_error($con);
    }else{
        header("location:cart.php");
    }
}

    
      
    


?>