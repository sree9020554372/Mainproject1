<?php
session_start();
include('connection.php');

   
if(isset($_POST['submited']))
  {
   
    
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
    
$img=$_FILES["img"]["name"];
$extension = substr($img,strlen($img)-4,strlen($img));
$allowed_extensions = array(".jpg","jpeg",".png",".gif",".pdf");
if(!in_array($extension,$allowed_extensions))
{

echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{


$idproof=$_FILES["idproof"]["name"];
$extension = substr($idproof,strlen($idproof)-4,strlen($idproof));
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))
{

echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
    

$certificates=$_FILES["certificates"]["name"];
$extension = substr($certificates,strlen($certificates)-4,strlen($certificates));
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))
{

echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{

    $username = mysqli_real_escape_string($conn, $username);
    $duplicate = mysqli_query($conn, "SELECT * from tb_login WHERE username='$username'");
    if(mysqli_num_rows($duplicate)>0)
    {
      echo "<script> alert('Already Registered'); </script>";
      // header('location:login.php');
      
    }
    else
    {

    $sql="insert into tb_login(`username`,`password`,`role`,`status`) VALUES ('$username','$password','master',3)";  
    if($conn->query($sql)=== TRUE)
    {
        $val="select login_id from tb_login where username='".$username."'";
        if($res=$conn->query($val))
            {
              foreach($res as $data)
              {
                $query1=mysqli_query($conn," INSERT INTO `tbl_master`(`name`, `email`,`phoneno`,`age`,`gender`,`Qualification`,`exp`,`img`,`idproof`,`certificates`,`username`,`password`,`status` ) VALUES('$name','$email','$phoneno','$age',' $gender','$Qualification','$exp','$img','$idproof','$certificates','$username','$password','3')");
                $result1 = mysqli_query($conn,$query1);
                if ($query1) {
                        	echo "<script>alert('Master has been added.');</script>"; 
                        		echo "<script>window.location.href = 'addmaster.php'</script>";   
                       
                      }
                      else
                        {
                        echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
                        }
              }
            }
    }


   
    if($reg_query)
    {
    echo "<script> alert ('Thank you for registration !!! '); window.location='#'</script>";
   
    require "../Mail/phpmailer/PHPMailerAutoload.php";
    $mail = new PHPMailer;
   
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
   
    // h-hotel account
    $mail->Username = 'sreelekshmianilkumar2023b@mca.ajce.in';
    $mail->Password = 'Dont_Steal';
   
    // send by h-hotel email
    $mail->setFrom('sreelekshmianilkumar2023b@mca.ajce.in', 'Employee added');
    // get email from input
    $mail->addAddress($_POST["username"]);
    //$mail->addReplyTo('lamkaizhe16@gmail.com');
   
    // HTML body
    $mail->isHTML(true);
    $mail->Subject = "You are added as an SpiceHut Employee ";
    $mail->Body = "<b>Dear $name $email</b>
          <h3>You are appointed as a Employee of SpiceHut</h3>
         Now you can join simlply using username= $username and passsword=$password
          <br><br>
          <p>With regrads,</p>
          <b>Admin , SpiceHut</b>";
   
    if (!$mail->send()) {
       
      echo "<script> alert ('Email Send UnSuccessfull !!! '); window.location='#'</script>";
   
    } 
    else {
   
     
      echo "<script> alert ('Email Send Successfully !!! '); window.location='index.php'</script>";
    }
   
    
    }
    
    
   else {
   echo "<script Type='text/javascript'>alert('Your Tester registration  was unsuccessfull please try again')</script>";
   }
   
    }


    
    }
  }
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


               

                                            <div class="col-lg-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>ADD CATEGORY</strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                        <div class="row form-group">
                                                                <div class="col col-md-13"><label for="text-input" class=" form-control-label"> Name</label></div>
                                                                <div class="col-12 col-md-19"><input type="text" id="name" name="name" placeholder="enter  name"   class="form-control" required onchange="validateInput();" ></div>
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
                                                                <div class="col-12 col-md-19"><input type="email" id="email" name="email" rows="9" placeholder="Content..." class="form-control"  required onchange="Validata();"></div>
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
                                                                <div class="col-12 col-md-19"><input type="phone" id="phoneno" name="phoneno" placeholder="enter phone no" class="form-control" required onchange="Validat();"></div>
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
                                                                <div class="col-12 col-md-19"><input type="type" id="age" name="age" placeholder="enter Age" class="form-control" required onchange="Validage();"></div>
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
                                                                <div class="col-12 col-md-19"><input type="type" id="Qualification" name="Qualification" placeholder="enter Qualification" class="form-control" required onchange="ValidQualification();"></div>
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
                                                                <div class="col-12 col-md-19"><input type="number" id="exp" name="exp" placeholder="" class="form-control"><small class="form-text text-muted"></small></div>
                                                            </div>

                                                            <div class="gender-details">
                                                <input type="radio" name="gender" value="male" checked id="dot-1" required>
                                                <input type="radio" name="gender" value="female" id="dot-2" >
                                                <input type="radio" name="gender" value="others" id="dot-3" >
                                                <span class="gender-title" >Gender</span>
                                                <div class="category">
                                                <label for="dot-1">
                                                <span class="dot one"></span>
                                               <span class="gender" >Male</span>
                                             </label>
                                              <label for="dot-2">
                                             <span class="dot two"></span>
                                              <span class="gender">Female</span>
                                               </label>
                                             <label for="dot-3">
                                             <span class="dot three"></span>
                                            <span class="gender">others</span>
                                         </label>
                                        </div>
                                         </div>

                                           
                                         <div class="row form-group">
                              
                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Photo</label></div>
                              <div class="col-12 col-md-19"><input type="file" id="img" name="img" placeholder="" class="form-control" required onChange="return fileValidation1();"></div>
                              <div class="col-12 col-md-19"><span id="mg" style="color:red;"></div>
                       </div> 

                       <script>
        function fileValidation1() {
            var fileInput = 
                document.getElementById('img');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                document.getElementById('mg').innerHTML="invalid file format"; 
                document.getElementById("mg").value = "";
                //alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>


                       <div class="row form-group">
                              
                              <div class="col col-md-3"><label for="text-input" class=" form-control-label"> IDPROOF</label></div>
                              <div class="col-12 col-md-19"><input type="file" id="idproof" name="idproof" placeholder="" class="form-control" required onChange="return fileValidation3();"></div>
                              <div class="col-12 col-md-19"><span id="id" style="color:red;"></div>
                       </div> 

                       <script>
        function fileValidation3() {
            var fileInput = 
                document.getElementById('idproof');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                document.getElementById('id').innerHTML="invalid file format"; 
                document.getElementById("id").value = "";
                //alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>

                       <div class="row form-group">
                              
                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Certificate</label></div>
                              <div class="col-12 col-md-19"><input type="file" id="certificates" name="certificates" placeholder="" class="form-control" required onChange="return fileValidation4();"></div>
                              <div class="col-12 col-md-19"><span id="cf" style="color:red;"></div>
                       </div> 

                       <script>
        function fileValidation4() {
            var fileInput = 
                document.getElementById('certificates');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                document.getElementById('cf').innerHTML="invalid file format"; 
                document.getElementById("cf").value = "";
                //alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>
                       <!--<div class="row form-group">

                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">certificates</label></div>
                              <div class="col-12 col-md-19"><input type="file" id="certificates" name="certificates" placeholder="" class="form-control"><small class="form-text text-muted"></small></div>
                       </div>
                       <div class="row form-group">

                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">IDPROOF</label></div>
                              <div class="col-12 col-md-19"><input type="file" id="idproof" name="idproof" placeholder="" class="form-control"><small class="form-text text-muted"></small></div>
                       </div>-->
                       <div class="row form-group">
                           <div class="col col-md-3"><label for="text-input" class=" form-control-label">username</label></div>
                           <div class="col-12 col-md-19"><input type="type" id="username" name="username" placeholder="enter username" class="form-control" required onChange=" return Validatun ();"></div>
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
                           <div class="col-12 col-md-19"><input type="password" id="password" name="password" placeholder="enter password" class="form-control" required onchange="Validatun();"></div>
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
                       
                       <input type="submit" class="btn btn-primary" name="submited" id="submit">
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