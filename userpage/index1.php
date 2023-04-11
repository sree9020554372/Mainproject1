<?php
//session_start();
//if (!empty($_SESSION['logged_in'])) {
   // include('connection.php');

//}
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
						<li class="nav-item"><a class="nav-link" href="viewshedule.php">view schedules</a></li>
						
						<li class="nav-item"><a class="nav-link" href="viewmaster.php">Master</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">My Achievement</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="cart.php">certification</a>
					
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
       

        <div class="content mt-3">
            <div class="animated fadeIn">
            <div class="card-body">
                <strong></strong>
                        <table class="table">
                                
              
              <tr>
                  <th>S1.NO</th>
                  <th>Category Name</th>
                  <th>Class Name</th>
                  <th>video name</th>
                
                  <th>video description</th>
                  <th>video</th>
                
              </tr>

            <?php
            require 'conn.php';
            $query = mysqli_query($conn, "SELECT tbl_category.c_id, tbl_category.categoryname,tbl_course.cname, tbl_course.cid,video.video_id, video.vname, video.vdescription, video.location ,video.status FROM tbl_category JOIN tbl_course ON tbl_category.c_id = tbl_course.c_id JOIN video ON tbl_course.cid = video.cid ");

            // $query = mysqli_query($conn, "SELECT * FROM `video` ORDER BY `video_id` ASC") or die(mysqli_error());
           // while($fetch = mysqli_fetch_array($query)){
            $cnt=1;
            while($row=mysqli_fetch_array($query)){
            ?>

<tr>
                  <td><?php echo htmlentities($cnt);?></td>
                  <td><?php echo htmlentities($row['categoryname']);?></td>"
                  <td><?php echo htmlentities($row['cname']);?></td>
                  <td><?php echo htmlentities($row['vname']);?></td>
                 
                
                  <td> <?php echo htmlentities($row['vdescription']);?></td>
                  <td><video width="100%" height="140" controls><source src="<?php echo $row['location']?>"></video></div></td>
                 

                                     
               
               

<!-- 
                                                            <div class="row form-group">
                                                                <div class="col col-md-13"><label for="text-input" class=" form-control-label">Video</label></div>
                                                                <div class="col-12 col-md-19"> <video width="100%" height="440" controls><source src="<?php echo $fetch['location']?>"></video></div>
                                                            </div>
                                                            <td> -->
               <?php
                    //if($row['status']==1){
                        //echo '<p><a href="inactive.php?id='.$row['cid'].'$status=1">Disable</a></p>';
                    //}else{
                       // echo '<p><a href="active.php?id='.$row['cid'].'$status=0">Enable</a></p>';
                    //}
                    ?>
              <!--<td><a href="courseupdate1111.php?cid=<?php echo $row['cid']?>">update</a></td>-->
              </tr>
              <?php $cnt=$cnt+1; } ?>
              
      </table>
                                            <!--<div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Name</strong> 
                                                    </div>-->
                                                    <div class="card-body card-block">
                                                        <form action="save_video.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                           <!-- <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <p class="form-control-static">Username</p>
                                                                </div>
                                                            </div>-->
                                                            
                                                            
                                                                 
                                                            
                                                                
                                                                
                                                            
                                                           
                                                            <!--<input type="save" class="btn btn-primary" value="save" name="save" id="save">-->
                                                        </form>
                                                    </div>
                                                    <div class="card-footer">
                                                        
                                                        
                                                    </div>
                                                </div>
                                              


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
