<?php
session_start();
include('connection.php');

   
if(isset($_POST['update']))
  {
   
    $mid=$_GET['mid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
   
    $age=$_POST['age'];
    $Qualification=$_POST['Qualification'];
    $exp=$_POST['exp'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password=$_POST['password'];
 //$img = $_FILES['images']['name'];
    //move_uploaded_file($_FILES["images"]["tmp_name"], "../uploads/".$img);
    


    $query="UPDATE tbl_master SET name='$name',email='$email',phoneno='$phoneno',age='$age',Qualification='$Qualification',exp='$exp',gender='$gender',username='$username',password='$password' where mid='$mid' ";
    //$query="UPDATE tbl_master SET name='$name',email='$email',phoneno='$phoneno',age='$age','Qualification='$Qualification',  exp='$exp',gender='$gender',username='$username',password='$password' WHERE mid='$mid' ";
    $query_run=mysqli_query($conn,$query);
    if ($query) {
    	echo "<script>alert('Master has been updated added.');</script>"; 
    		echo "<script>window.location.href = 'manage_master.php'</script>";   
   
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
    }
}
    
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
                    <h3 class="menu-title">Add Classes</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                     <!----   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Add Classes</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>-->
                    </li>
                    </li>
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
                    <!--<li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>

                   <!-- <h3 class="menu-title">Icons</h3> /.menu-title 

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>-->
                    </li>
                    <!--<h3 class="menu-title">Extras</h3><!-- /.menu-title -->
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
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="../index.html"><i class="fa fa-power-off"></i> Logout</a>
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
        
        <div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>UPDATE CLASSES</strong> 
        </div>
        <div class="card-body card-block">
        
            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
            <?php
$mid=$_GET['mid'];
$query=mysqli_query($conn,"select * from tbl_master where mid='$mid'and status='active'");
$num2=mysqli_num_rows($query);
    if($num2 > 0){
        $row= mysqli_fetch_array($query);
    }
    else{
        $row= null;
    }
  
?>
            
                
            
            
                
            <div class="row form-group">
                                                                <div class="col col-md-13"><label for="text-input" class=" form-control-label"> Name</label></div>
                                                                <div class="col-12 col-md-19"><input type="text" id="name" name="name" placeholder="enter  name"   class="form-control" value="<?= ($row!=null) ? $row['name'] : "Not Available" ?>" required onchange="validateInput();" ></div>
                                                                <div class="col col-md-13"><span id="cn" style="color:red;"></span></div>
                                                            </div>

                                                            <script>
   
function validateInput() {
    var input = document.getElementById("name").value;
    var pattern = /^[A-Za-z]+$/; // regular expression pattern to match only letters
    
    if (!input.match(pattern)) {
        
        //alert("Please enter only letters for category name.");
        document.getElementById('cn').innerHTML="Only alphabets are allowed!!"; 
        document.getElementById("name").value = "";
               
                 
        return false;
        
    }
    document.getElementById('msg2').innerHTML="";
     
    return true;
    
}
</script>
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-13"><label for="text-input" class=" form-control-label">Email</label></div>
                                                                <div class="col-12 col-md-19"><input type="email" id="email" name="email" rows="9" placeholder="Content..." class="form-control" value="<?= ($row!=null) ? $row['email'] : "Not Available" ?>" required onchange="Validata();"></div>
                                                                <div class="col col-md-13"><span id="em" style="color:red;"></span></div>
                                                            </div>    
<script>		
function Validata() {

    var val = document.getElementById('email').value;

    if (!val.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)) 
    {
        document.getElementById('em').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('em').innerHTML=" ";
    return true;
}

		</script>
                                                           
                                                                
                                                                
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phoneno</label></div>
                                                                <div class="col-12 col-md-19"><input type="phone" id="phoneno" name="phoneno" placeholder="enter phone no" class="form-control" value="<?= ($row!=null) ? $row['phoneno'] : "Not Available" ?>" required onchange="Validat();"></div>
                                                                <div class="col col-md-13"><span id="ph" style="color:red;"></span></div>
                                                            </div>

                                                            <script>
function Validat() {

    var val = document.getElementById('phoneno').value;

    if (!val.match(/^[789][0-9]{9}$/))
    {
        document.getElementById('ph').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('phoneno').value = "";
        return false;
    }
document.getElementById('ph').innerHTML=" ";
    return true;
}

</script>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Age</label></div>
                                                                <div class="col-12 col-md-19"><input type="type" id="age" name="age" placeholder="enter Age" class="form-control" value="<?= ($row!=null) ? $row['age'] : "Not Available" ?>" required onchange="Validage();"></div>
                                                                <div class="col col-md-13"><span id="ag" style="color:red;"></span></div>
                                                            </div>

 <script>		
function Validage() {

    var val = document.getElementById('age').value;

    if (!val.match(/^[1-9]+$/)) 
    {
        document.getElementById('ag').innerHTML="Enter Correct age";
		            document.getElementById('age').value = "";
        return false;
    }
document.getElementById('ag').innerHTML=" ";
    return true;
}
</script>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Qualification</label></div>
                                                                <div class="col-12 col-md-19"><input type="type" id="Qualification" name="Qualification" placeholder="enter Qualification" class="form-control" value="<?= ($row!=null) ? $row['Qualification'] : "Not Available" ?>" required onchange="ValidQualification();"></div>
                                                                <div class="col col-md-13"><span id="Qf" style="color:red;"></span></div>
                                                            </div>
<script>
   
function ValidQualification() {
    var input = document.getElementById("Qualification").value;
    var pattern = /^[A-Za-z]+$/; // regular expression pattern to match only letters
    
    if (!input.match(pattern)) {
        
        //alert("Please enter only letters for category name.");
        document.getElementById('Qf').innerHTML="Only alphabets are allowed!!"; 
        document.getElementById("Qualification").value = "";
               
                 
        return false;
        
    }
    document.getElementById('Qf').innerHTML="";
     
    return true;
    
}
</script>


                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Experience Year</label></div>
                                                                <div class="col-12 col-md-19"><input type="number" id="exp" name="exp" placeholder="" class="form-control" value="<?= ($row!=null) ? $row['exp'] : "Not Available" ?>"><small class="form-text text-muted"></small></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">gender</label></div>
                                                                <div class="col-12 col-md-19"><input type="text" id="gender" name="gender" placeholder="" class="form-control" value="<?= ($row!=null) ? $row['gender'] : "Not Available" ?>"><small class="form-text text-muted"></small></div>
                                                            </div>
                                                            <div class="row form-group">
                                                             <div class="col col-md-3"><label for="text-input" class=" form-control-label">username</label></div>
                                                                 <div class="col-12 col-md-19"><input type="type" id="username" name="username" placeholder="enter username" class="form-control"    required onChange=" return Validatun ();"  value="<?= ($row!=null) ? $row['username'] : "Not Available" ?>"></div>
                                                                 <div class="col-12 col-md-19"><span id="un" style="color:red;"></div>
                                                             </div>

                                                             <script>
   
   function Validatun() {
       var input = document.getElementById("username").value;
       var pattern = /^[A-Za-z]+$/; // regular expression pattern to match only letters
       
       if (!input.match(pattern)) {
           
           //alert("Please enter only letters for category name.");
           document.getElementById('un').innerHTML="Only alphabets are allowed!!"; 
           document.getElementById("username").value = "";
                  
                    
           return false;
           
       }
       document.getElementById('un').innerHTML="";
        
       return true;
       
   }
   </script>

                                                             <div class="row form-group">
                                                                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                                                  <div class="col-12 col-md-19"><input type="password" id="password" name="password" placeholder="enter password" class="form-control" required onchange="Validatun();" value="<?= ($row!=null) ? $row['password'] : "Not Available" ?>"></div>
                                                                   <div class="col-12 col-md-19"><span id="pd" style="color:red;"></div>
                                                            </div>
                                                            <script>		
function Validatun() {

    var val = document.getElementById('password').value;

    if (!val.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/)) 
    {
        document.getElementById('pd').innerHTML="Upper case, Lower case, Special character and Numeric number are required in Password filed";
		
		     document.getElementById('password').value = "";
        return false;
    }
document.getElementById('pd').innerHTML=" ";
    return true;
}

</script>


                   
                       
                <input type="hidden" class="btn btn-primary" value="mid" name="mid" id="mid">
                <input type="submit" class="btn btn-primary" value="update" name="update" id="update">
                       <?php  ?> 
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