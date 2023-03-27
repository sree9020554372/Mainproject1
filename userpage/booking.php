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
								<a class="dropdown-item" href="viewleave1.php">viewLeave</a>
								
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
// $query=mysqli_query($conn," SELECT tbl_course.cid, tbl_course.cname, tbl_course.cost, tbl_course.status, tb_login.username
// FROM tbl_course
// INNER JOIN tb_login ON tbl_course.login_id = tb_login.login_id ");
$query=mysqli_query($conn," SELECT tbl_course.cid, tbl_course.cname, tbl_course.cost, tbl_course.status
FROM tbl_course where tbl_course.cid=$gid ");


//$cid=$_POST['cid'];
//$query=mysqli_query($conn,"select * from tbl_course where cid='$cid'and status='active'");
$num2=mysqli_num_rows($query);
    if($num2 > 0){
        $row= mysqli_fetch_array($query);
   }
    else{
        $row= null;
    }




?>  
  
  





  

                                                           
                                                            
                                                                   
                                                            
                                                           
                                                            <!--<div class="row form-group">
                                                                    <div class="col col-md-13"><label for="select" class=" form-control-label" name="category">Category</label></div>
                                                                    <div class="col-12 col-md-19">
                                                                        <select name="category" id="scategory" class="form-control">
                                                                            <option value="please select">Please select</option>
                                                                            <option value="classical">Classical</option>
                                                                            <option value="western">Western</option>
                                                                            <option value="options">Option #3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>-->
                                                            <div class="row form-group">
                                                                <div class="col col-md-10"><label for="text-input" class=" form-control-label">Student Name</label></div>
                                                                <div class="col-12 col-md-10"><input type="text" id="username" value="<?= ($row!=null) ? $a : "Not Available" ?>" name="username" placeholder=""   class="form-control"  ><small class="form-text text-muted"></small> </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-10"><label for="text-input" class=" form-control-label">Email</label></div>
                                                                <div class="col-12 col-md-10"><input type="email" id="email" value="<?= ($row!=null) ? $emaill : "Not Available" ?>" name="email" rows="9" placeholder="Content..."  class="form-control" ><small class="form-text text-muted"></small></div>
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
			
			<!--<div class="row inner-menu-box">
			
				<div class="">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					
						

                        <div class="row product-categorie-box">
    
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="">
                                    <div class="row">
                                    <?php  
                                   // $result = mysqli_query($conn,"SELECT * FROM tbl_course");
                                   // while ($raw = mysqli_fetch_array($result)){ ?>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <form method="post"  enctype="multipart/form-data" action="">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                   
                                                   // <img src="images/<?php echo $raw['file']; ?>" class="img-fluid" alt="Image" style="height: 188px;">
                                                   
                                                </div>
                                                <div class="why-text">
                                                    <h4 align="center"><?php echo $raw['name']; ?></h4>
                                                    
                                                     
                                                    <a class="nav-link" id="<?php echo $raw['fid']; ?>" href="listbox.php?fid=<?php echo $raw['fid']; ?>" role="tab" aria-controls="<?php echo $raw['fid']; ?>" aria-selected="true" align="center">join now</a>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <?php //} ?>	
                                    </div>
                                </div>
                                
                                     
                             
                            </div>
                            </div>
            </div>
                        </div>
	        </div>
	    </div>		
	</div>
	<End Menu -->
	
	<!-- Start Gallery -->
	<!--<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-01.jpg">
							<img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-02.jpg">
							<img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-03.jpg">
							<img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-04.jpg">
							<img class="img-fluid" src="images/gallery-img-04.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-05.jpg">
							<img class="img-fluid" src="images/gallery-img-05.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-06.jpg">
							<img class="img-fluid" src="images/gallery-img-06.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<!--<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<!--<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-4590
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							800, Lorem Street, US
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>-->
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