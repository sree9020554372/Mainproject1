<?php
session_start();
if (!empty($_SESSION['logged_in'])) {
   // include('connection.php');
   $a=$_SESSION['username'];
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
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

</head>

<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
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
        <input type="hidden" id="name1" value="<?php echo $a; ?>">
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
				<div class="col-lg-12">
					<div class="heading-title text-center">
						
						
						
					</div>
				</div>
			</div>
			<div id="wrapper"> 
                
            <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-16">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">view masters</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                
              
              <tr>
                  <th>S1.NO</th>
                  <th> Student Name</th>
                  <th> Email</th>
                  <th>Course Name</th>
                  <th>Cost</th>
                  
                 
              </tr>
          
              
              <?php
              include 'connection.php';
              $query=mysqli_query($conn, $sql = "SELECT  * FROM tbl_booking WHERE STATUS='active'");
              
              
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                                  
              <tr>
                  <td><?php echo htmlentities($cnt);?></td> 
                  <td> <?php echo htmlentities($row['username']);?></td>
                  <td> <?php echo htmlentities($row['email']);?></td>
                  <td><?php echo htmlentities($row['cname']);?></td>
                  <td><?php echo htmlentities($row['cost']);?></td>
                  <!--<td><a style="color:black" class="btn btn-primary href="?bookid=<?php echo $row['bookid'];?>><b>PayNow</a></td>-->
                  
                  <td><input type="button" id="rzp-button1"name="btn"value="pay now"class="btn btn-primary" onclick="pay_now()"/></td>
                 
                
                  
                 
               <td>
               <?php
                   // if($row['status']==1){
                        //echo '<p><a href="inactive.php?id='.$row['leaveid'].'$status=1">Disable</a></p>';
                   // }else{
                        //echo '<p><a href="active.php?id='.$row['leaveid'].'$status=0">Enable</a></p>';
                    //}
                    ?>
              <!-- <td><a href="courseupdate1111.php?leaveid=<?php echo $row['leaveid']?>">update</a></td>-->
              </tr>
              <?php $cnt=$cnt+1; } ?>             
              
      </table>
                                        
                                </table>
                            </div>
                        </div>
                    </div>

           <!-- <div class="about-section-box">
		          <div class="container">
			           <div class="row">

                       <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>ADD CLASSES</strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                       
                                               
  
  

                                                           
                                                            
                                                                   
                                                            
                                                          <div class="row form-group">
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
                                                          
                                                              
                                                                
                                                                
                                                           



                     


                    </div>
                </div>
            </section>
        </div>
			
			<div class="row inner-menu-box">
			
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
	<!-- End Menu -->
	
	
	
	
				<!--<div class="col-md-4">
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
    <script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script>
//   console.log("hello");
// var amt ="100";
    function pay_now(){
		var name = jQuery('#name1').val();
		console.log(name);
		
        var amount=2000;
        var options =  {
            "key": "rzp_test_KB0lrOFPcWAXeZ", // Enter the Key ID generated from the Dashboard

            "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Art Gallery",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler":function(response){
              
               jQuery.ajax({
                   type:"POST",
                   url: "payment_process.php",
                   data:"payment_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name,
                   success:function(result){
                       window,location.href="thankyou.php";
                   }
               });
              
      }
        
    
};
var rzp1 = new Razorpay(options);

    rzp1.open();
    
    }
</script>
	
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
