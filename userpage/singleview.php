<php 
 
  
  
  
  
?>





<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">   
 
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Site Metas -->
  <title>CRUISELINER</title>  
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Site Icons -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

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
                      <li class="nav-item"><a class="nav-link" href="index.php">Dahboard</a></li>
                      <li class="nav-item"><a class="nav-link" href="package.php">view course</a></li>
                      <li class="nav-item"><a class="nav-link" href="placeorder.php"></a></li>
                      
                      <li class="nav-item"><a class="nav-link" href="ticketboooking.php"> Booking</a></li>
                      <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">My Booking</a>
                          <div class="dropdown-menu" aria-labelledby="dropdown-a">
                              <a class="dropdown-item" href="cart.php"></a>
                              
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
  <div id="" class="">
      <ul class="slides-container">
          <li class="text-left">
              <img src="" alt="">
              <div class="container">
                  <div class="row">
                      <div class="col-md-5">
                      </div>
                  </div>
              </div>
          </li>
      </ul>
      
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
  <!--<div class="qt-box qt-background">
      <div class="container">
          <div class="row">
              <div class="col-md-8 ml-auto mr-auto text-center">
                  <p class="lead ">
                      " If you're not the one cooking, stay out of the way and compliment the chef. "
                  </p>
                  <span class="lead">Michael Strahan</span>
              </div>
          </div>
      </div>
  </div>-->
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
          
          <div class="row inner-menu-box">
          
              <div class="col-3">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  
                      
                  </div>
              </div>
             
              
              
<form method="post"  enctype="multipart/form-data" action="userview.php?cid=<?php echo $cid  ?>">

<?php
                            include('connection.php');
                            $gid=$_REQUEST['id'];
                            $data_res= mysqli_query($conn,"SELECT * FROM tbl_course where cid='$gid' ");
                            if($data_res){
                                if(mysqli_num_rows($data_res) > 0){
                                    while($row= mysqli_fetch_array($data_res)){
                                        $cname= $row['cname'];
                                        $cstart= $row['cstart'];
										$cost= $row['cost'];
                                        $description= $row['description'];
                                        $images= $row['images'];


                                        echo '
                                        <div class="animal-card" style="width: 18rem;">
                                        <p  style=font-weight:bold;font-size:50px;   class="btn btn-info">'.$cname.'</p>

                                            <img class="card-img-top" src="../images/'.$images.'"   alt="" height="400" width="20"  style="border-radius:70px;margin-right:500px;margin-left:-150px;margin-top:100px>
                                            <div class="card-body">
                                          
                                                
                                         
                                            
                                            </div>
                                        </div>
                                    ';
                                ?>



<img src="<?php echo $images; ?>" width="700px" height="500px"     style="border-radius:70px;margin-left:450px;margin-right:1100px;margin-top:100px; background-color: #DCDCDC;" >	


<div class="form-group quantity-box" style="width:30px ,height:50px;" >
<h2 style="margin-left:720px;margin-top:-500px;font-weight:bold;font-size:30px"><?php echo $cname  ?></h2>
<label class="control-label" style="margin-left:720px" > <?php echo $description  ?></label>
</div>	

<div class="form-group quantity-box" style="width:30px ,height:50px;" >
<label class="control-label" style="margin-left:720px">Start Date: &nbsp <?php echo $cstart  ?></label>

<label class="control-label" style="margin-left:720px" >Cost: &nbsp <?php echo $cost  ?></label>
</div>
<?php
 echo '
 <div class="animal-card" style="width: 18rem;">
    
         
     <a href="booking.php?id='.$gid.'"  class="btn btn-primary" >JoinNow</a>
     
     
     </div>
 </div>
';
?>
                                    </form>
<?php
}}}
?>

<div class="form-group quantity-box">



</div>
<!--<h2 style="margin-left:720px;margin-top:-500px;font-weight:bold;font-size:30px"><?php echo $description  ?> </h2>

<!--<input type="submit" name="cart" value="Add to Cart" style="height: 50px;color: #fff;  background: #146eb4; width: 200px;font-size: initial;font-weight: 900;margin-left:720px;margin-top:400px">
<button name="View cart"  style="height: 50px;color: #fff;  background: #146eb4; width: 200px;font-size: initial;font-weight: 900;">View Cart</button>
<h3 style="margin-left:720px;margin-top:-400px;font-weight:bold;font-size:22px">Price :&nbsp<?php echo $pprice ?></h3><br>
<div class="form-group quantity-box" style="width:100px">
  <label class="control-label" style="margin-left:720px">Quantity&nbsp:</label>
  <input class="form-control" name="quantity" value="1" min="1" max="200" type="number" style="margin-left:720px">
</div>
<div class="form-group quantity-box" style="width:200px">
  <label class="control-label" style="margin-left:720px">Room number&nbsp:</b></label>
  <input class="form-control" name="location" value="0" min="300" max="450" type="number" style="margin-left:720px">
</div>
<!--<div class="form-group" style="width:100px">
  <label class="control-label" style="margin-left:720px"><b>Location&nbsp:</b></label>
  <textarea class="" name="location" style="margin-left:720px"></textarea>
</div>-->
                                          </form>
                      </div>
                  
              
          
          
      
  
  <!-- End Menu -->
  
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
