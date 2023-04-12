<?php
session_start();

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title"></h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                     
                    <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Add Category</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="adcategory.php">category</a></li>
                                <li><i class="fa fa-table"></i><a href="manage_category.php">Manage category</a></li>
                            </ul>
                        </li>
                        
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Add Classes</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="addcourse.php">Add Classes</a></li>
                            <li><i class="fa fa-table"></i><a href="viewcourse.php">Manage classes</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Add Master</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="addmaster.php">Add Master</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="manage_master.php">Manage_Master</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Add Schedule</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="addshedule.php">Add Schedule</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="manage_shedule.php">Manage Shedule</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Course Related</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="video/add.php">Add Video</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="video/index.php">View video</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="pdf/insert.php">Add pdf</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="pdf/pdfview.php">View pdf</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Students</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                            <li><i class="menu-icon fa fa-th"></i><a href="manage_leave.php">Leave Request</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Master</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                            <li><i class="menu-icon fa fa-th"></i><a href="viewleave.php">Leave Request</a></li>
                        </ul>
                    </li>
                  
                   <!-- <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>

                   
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <!--<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="admin-profile.php"><i class="fa fa-user"></i> My Profile</a>

                       
                            <a class="nav-link" href="../logout.php"><"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header>
                      
                      
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-16">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"></strong>
                            </div>
                            <div class="card-body">
              
              
<form method="post"  enctype="multipart/form-data" action="masterview.php?mid=<?php echo $mid  ?>">

<?php
                            include('connection.php');
                            //$gid=$_REQUEST['id'];
                            $data_res= mysqli_query($conn,"SELECT * FROM tbl_master  ");
                            if($data_res){
                                if(mysqli_num_rows($data_res) > 0){
                                    while($row= mysqli_fetch_array($data_res)){
                                        $name= $row['name'];
                                        $email= $row['email'];
										$Qualification= $row['Qualification'];
                                        // $description= $row['description'];
                                        $img= $row['img'];


                                        echo '
                                        <div class="animal-card" style="width: 18rem;">
                                        <p  style=font-weight:bold;font-size:50px;   class="btn btn-info">'.$name.'</p>

                                            <img class="card-img-top" src="../images/'.$img.'"   alt="" height="400" width="20"  style="border-radius:70px;margin-right:500px;margin-left:-150px;margin-top:100px>
                                            <div class="card-body">
                                          
                                                
                                         
                                            
                                            </div>
                                        </div>
                                    ';
                                ?>



<img src="<?php echo $img; ?>" width="700px" height="500px"     style="border-radius:70px;margin-left:450px;margin-right:1100px;margin-top:100px; background-color: #DCDCDC;" >	


<div class="form-group quantity-box" style="width:30px ,height:50px;" >
<h2 style="margin-left:720px;margin-top:-500px;font-weight:bold;font-size:30px"><?php echo $name  ?></h2>
<label class="control-label" style="margin-left:720px" > <?php echo $name  ?></label>
</div>	

<div class="form-group quantity-box" style="width:30px ,height:50px;" >
<label class="control-label" style="margin-left:720px">: &nbsp <?php echo $Qualification  ?></label>

<label class="control-label" style="margin-left:720px" > &nbsp <?php echo $email  ?></label>
</div>
<?php
 echo '
 <div class="animal-card" style="width: 18rem;">
    
         
     <a href="manage_master.php?id='.$gid.'"  class="btn btn-primary" >JoinNow</a>
     
     
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
