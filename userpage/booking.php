<?php

include('connection.php');
session_start();
error_reporting(0); 
$a=$_SESSION['username'];
echo $_SESSION['username'];

if(isset($a))
{
$sql="SELECT username FROM tb_login WHERE login_id='$login_id'";



//while($row=mysql_fetch_array($query)){
    //$login_id=$row['login_id'];
    //echo $login_id;
//}
if(isset($_POST['BookNow']))
{
   //$cid=$_GET['id'];
   $login_id=$_GET['login_id'];
   //$bookid= $_POST['bookid'];
   $username= $_POST['username'];
   $email= $_POST['email'];
   $cname= $_POST['cname'];
   $cost= $_POST['cost'];
 

   
   $query1=mysqli_query($conn,"INSERT INTO `tbl_booking`(login_id,username,email,cname,cost,status) VALUES('$login_id','$a','$email','$cname','$cost','active')");
    //$result1 = mysqli_query($conn,$query1);
    if ($query1) {
    	echo "<script>alert('booking has been added.');</script>"; 
    		echo "<script>window.location.href = 'viewbooking.php'</script>";   
   
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
    }

  
}

}

?>

 



 
  






<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>ElegantD</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
				<p class=""><i class=""></i><h3><b>WELCOME</b></h3><b><h2></h2></b></strong></p>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="userview.php">Join classes</a></li>
						<li class="nav-item"><a class="nav-link" href="viewmaster.php">view schedules</a></li>
						
						<li class="nav-item"><a class="nav-link" href="viewshedule.php">Masters</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"> Leave</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="addleave.php">Apply Leave</a>
								<a class="dropdown-item" href="viewleave.php">viewLeave</a>
								
								<!--<a class="dropdown-item" href="../logout.php">Movie Ticket Cart</a>-->
							</div>
						</li>
						<!--<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>-->
						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>-->
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">My Account</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="userprofile.php">Profile</a>
								<a class="dropdown-item" href="change-password.php">Change Password</a>
								<a class="dropdown-item" href="../logout.php">Logout</a>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                
            </div>
	<!-- End slides -->
	
	<!-- Start About -->
	<!--<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>CRUISELINER</span></h1>
						<p>Perhaps this cruise ship fact isn’t a fun one, but it’s true. Many people wonder if cruise ships have a morgue on board, and they do. This isn’t something cruise lines publicize, but of course people can die anywhere, even on a cruise vacation. So, all cruise ships sail with a morgue, usually located on the lowest decks away from passengers.</p>
						<p>This may go without saying for seasoned cruisers, but this fact might surprise you if you’re cruising for the first time. Internet on a cruise just isn’t the same as at a land resort.Wifi has been limited, slow and pretty expensive for years. However, this is changing. We’re now seeing that cruise ship internet is making strides, and is faster and less expensive than in the past. An example of this is the innovative Princess Cruises Ocean Medallion, which has the fast and affordable MedallionNet.</p>
						
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/port-img7.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>-->
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="">
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-10">
					<div class="heading-title text-center">
						
						
						
					</div>
				</div>
			</div>
			<div id="wrapper">            
            <div class="about-section-box">
		          <div class="container">
			           <div class="row">

                       <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>ADD CLASSES</strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
														<?php
														$gid=$_REQUEST['id'];

$query=mysqli_query($conn," SELECT tbl_course.cid, tbl_course.cname, tbl_course.cost, tbl_course.status
FROM tbl_course where tbl_course.cid=$gid ");



$num2=mysqli_num_rows($query);
    if($num2 > 0){
        $row= mysqli_fetch_array($query);
   }
    else{
        $row= null;
    }




?>  
  
  





  

                                                           
                                                            
                                                                   
                                                            
                                                           
                                                          
                                                            <div class="row form-group">
                                                                <div class="col col-md-10"><label for="text-input" class=" form-control-label">Student Name</label></div>
                                                                <div class="col-12 col-md-10"><input type="text" id="username" value="<?= ($row!=null) ? $a : "Not Available" ?>" name="username" placeholder=""   class="form-control"  ><small class="form-text text-muted"></small> </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-10"><label for="text-input" class=" form-control-label">Email</label></div>
                                                                <div class="col-12 col-md-10"><input type="email" id="email"  name="email" rows="9" placeholder="Content..."  class="form-control" ><small class="form-text text-muted"></small></div>
                                                            </div>    
                                                           <!-- <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">description</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="description" id="description" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                                            </div>-->
                                                            <div class="row form-group">
                              
                                       <div class="col col-md-10"><label for="text-input" class=" form-control-label">course Name</label></div>
                                       <div class="col-12 col-md-10"><input type="type" id="cname" name="cname" placeholder="" value="<?= ($row!=null) ? $row['cname'] : "Not Available" ?>" class="form-control"><small class="form-text text-muted"></small></div>
                                       </div> 
                                                              
                                                                
                                                                
                                                            <div class="row form-group">
                                                                <div class="col col-md-10"><label for="text-input" class=" form-control-label">Cost</label></div>
                                                                <div class="col-12 col-md-10"><input type="text" id="cost" name="cost" placeholder="" value="<?= ($row!=null) ? $row['cost'] : "Not Available" ?>" class="form-control"><small class="form-text text-muted"></small></div>
                                                            </div>
                                                            
                                                            
                              
															<!--<input type="hidden" class="btn btn-primary" value="cid" name="cid" id="cid">-->
                                                            <input type="submit" class="btn btn-primary" name="BookNow" id="BookNow" value="BookNow">
															<?php  ?> 
                                                        </form>
                                                    </div>
                                                    <div class="card-footer">
                                                        
                                                        
                                                </div>
                                             </div>



                     


                    </div>
                </div>
            </section>
        </div>
			
			
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>