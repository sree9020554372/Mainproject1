<?php
session_start();
include('connection.php');

$a=$_SESSION['login_id'];
if(isset($a))
{
if(isset($_POST['submited']))
  {
   
    $c_id=$_POST['c_id'];
   // $login_id=$_POST['login_id'];
    $cname=$_POST['cname'];
    $cstart=$_POST['cstart'];
    //$description=$_POST['description'];
    $cost=$_POST['cost'];
  $description=$_POST['description'];
   // $img = $_FILES['images']['name'];
    //move_uploaded_file($_FILES["images"]["tmp_name"], "../uploads/".$img);
    
$images=$_FILES["images"]["name"];
$extension = substr($images,strlen($images)-4,strlen($images));
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))
{

echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif/pdf format allowed');</script>";
}
else
{

$img=md5($images).time().$extension;
move_uploaded_file($_FILES["images"]["tmp_name"],"images/".$img);
     





 
 
    $query1=mysqli_query($conn," INSERT INTO `tbl_course`(`c_id`,`login_id`, `cname`, `cstart`,`cost`,`description`,`images`,`status`) VALUES('$c_id','$a','$cname','$cstart','$cost','$description','$images','active')");
    //$result1 = mysqli_query($conn,$query1);
    if ($query1) {
    	echo "<script>alert('Classes has been added.');</script>"; 
    		echo "<script>window.location.href = 'addcourse.php'</script>";   
   
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
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
    <title>ElegantD </title>
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
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title"></h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                    
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
                    <!-- <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Course Related</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="video/add.php">Add Video</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="video/index.php">View video</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="pdf/insert.php">Add pdf</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="pdf/pdfview.php">View pdf</a></li>
                        </ul>
                    </li> -->
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


               

                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>ADD CATEGORY</strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                           <!-- <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <p class="form-control-static">Username</p>
                                                                </div>
                                                            </div>-->
                                                            <!--<div class="row form-group">
                                                                <div class="col col-md-13"><label for="text-input" class=" form-control-label">Category</label></div>
                                                                <div class="col-12 col-md-19"><input type="text" id="cateogoryname" name="categoryname" placeholder="enter class name" class="form-control"  required onchange="Validate();" ></div>
                                                            </div>-->
                                                            <?php



$sql=mysqli_query($conn,"SELECT * FROM tbl_category WHERE STATUS='active'"); 
?>
<label>Category Name</label><br>

     
<select   name="c_id" id="categoryname" onchange="showResult(this.value)" class="form-control m-bot15" required >
<option value="">--select--</option>
<?php
while($row=mysqli_fetch_array($sql))
{

?>
<option value="<?php echo $row[0] ?>" ><?php echo $row[1] ?></option>

<?php
  
}
?>

</select></div>


                                                          
                                                             <div class="row form-group">
                                                                <div class="col col-md-13"><label for="text-input" class=" form-control-label">Course Name</label></div>
                                                                <div class="col-12 col-md-19"><input type="text" id="cname" name="cname" placeholder="enter class name"   class="form-control" required onchange="validateCname();"  ></div>
                                                                <div class="col-12 col-md-19"><span id="msg1" style="color:red;"></div>
                                                            </div>

                                                            <script>
    //<span id="categoryname" style="color:red;"></span>
function validateCname() {
    var input = document.getElementById("cname").value;
    var pattern = /^[A-Za-z]+$/; // regular expression pattern to match only letters
    
    if (!input.match(pattern)) {
        
        //alert("Please enter only letters for category name.");
        document.getElementById('msg1').innerHTML="Only alphabets are allowed!!"; 
        document.getElementById("cname").value = "";
               
                 
        return false;
        
    }
    document.getElementById('msg1').innerHTML="";
     
    return true;
    
}
</script>


                                                            <div class="row form-group">
                                                                <div class="col col-md-13"><label for="text-input" class=" form-control-label">cstart</label></div>
                                                                <div class="col-12 col-md-19"><input type="date" id="cstart" name="cstart" rows="9" placeholder="Content..." class="form-control"  required onchange="validateDate();"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-19"><span id="msg5" style="color:red;"></span></div>
                                                                
                                                           
                                                            </div>
                                                            <script>
// function validateInput() {
//     var inputDate = document.getElementById("cstart").value;
//     var dateRegex = /^\d{2}-\d{2}-\d{4}$/; // regular expression to match dd-mm-yyyy format
//     var startDate = new Date("01-04-2023"); // Change this to the minimum allowed date
//     var endDate = new Date(); // Change this to the maximum allowed date, or leave it as today's date
    
//     if (!inputDate.match(dateRegex)) {
//         document.getElementById('msg5').innerHTML = "Please enter a valid date in the format dd-mm-yyyy";
//         document.getElementById("cstart").value = "";
//         return false;
//     }
    
//     var dateParts = inputDate.split("-");
//     var dateObj = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
    
//     if (dateObj < startDate || dateObj > endDate) {
//         document.getElementById('msg5').innerHTML = "Please enter a date between " + startDate.toLocaleDateString() + " and " + endDate.toLocaleDateString();
//         document.getElementById("cstart").value = "";
//         return false;
//     }
    
//     document.getElementById('msg5').innerHTML = "";
//     return true;
// }

// function validateDate() {
//   var inputDate = document.getElementById("cstart").value;
//   var startDate = new Date("2023-03-06"); // Change this to the minimum allowed date
//   var endDate = new Date(); // Change this to the maximum allowed date, or leave it as today's date
  
//   if (!inputDate.match(/^\d{4}-\d{2}-\d{2}$/)) {
//     alert("Please enter a valid date in the format yyyy-mm-dd");
//     return false;
//   }
  
//   var dateObj = new Date(inputDate);
  
//   if (dateObj < startDate || dateObj > endDate) {
//     alert("Please enter a date between " + startDate.toDateString() + " and " + endDate.toDateString());
//     return false;
//   }
  
//   return true;
// }

// </script>
                                                            

                      

                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cost</label></div>
                                                                <div class="col-12 col-md-19"><input type="text" id="cost" name="cost" placeholder="enter cost" class="form-control"  required onchange="validateInput();" ><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-19"><span id="msg3" style="color:red;"></div>
                                                            </div>
                                                            <script>
    //<span id="categoryname" style="color:red;"></span>
function validateInput() {
    var input = document.getElementById("cost").value;
    var pattern =  /^\d{0,4}(\.\d{0,2})?$/; // regular expression pattern to match only letters
    
    if (!input.match(pattern)) {
        
        //alert("Please enter only letters for category name.");
        document.getElementById('msg3').innerHTML="Only numbers are allowed!!"; 
        document.getElementById("cost").value = "";
               
                 
        return false;
        
    }
    document.getElementById('msg3').innerHTML="";
     
    return true;
    
}
</script>


                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">description</label></div>
                                                                <!--<div class="col-12 col-md-9"><textarea name="description" id="description" rows="9" placeholder="Content..." class="form-control" required onchange="validatedes();"></textarea></div>-->
                                                                <div class="col-12 col-md-9">  <textarea rows="9" name="description"  id="description"  onChange="maxlength1(this, 250)" class="form-control"  pattern="^(?:\b\w+\b[\s\r\n]*){1,250}$"></textarea></div>
                                                                <div class="col col-md-3"> <span id="mname" style="color:red;"></span></div>
                                                                <div class="col col-md-3"> </div>
                                                            </div>
                                                            <script>
                                                                
    function maxlength1(element, maxvalue){
    var q = element.value.split(/[\s]+/).length;
    if(q > maxvalue){
        var r = q - maxvalue;
        //alert("Sorry, you have input "+q+" words into the "+
        //"text area box you just completed. It can return no more than "+
        //maxvalue+" words to be processed. Please abbreviate "+
        //"your text by at least "+r+" words");
        document.getElementById('mname').innerHTML="Sorry, you have input "+q+" words  "+
        " for description. It can return no more than "+
        maxvalue+" "+
        "Please abbreviate your text by at least "+r+" words"; 
        document.getElementById("description").value = "";
        return false;
    }
    document.getElementById('mname').innerHTML="";
    return true;
}
</script>


                                                  

                                                            <div class="row form-group">
                              
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">images</label></div>
                                                                <div class="col-12 col-md-19"><input type="file" id="images" name="images" placeholder=""  class="form-control" required onchange="fileValidation1();"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-19"><span id="fname" style="color:red;"></div>
                                                            </div>

                                                            <script>
        function fileValidation1() {
            var fileInput = 
                document.getElementById('images');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                document.getElementById('images').innerHTML="invalid file format"; 
                document.getElementById("images").value = "";
                //alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>



                                                       
                                                                 
                                                           

                                                            
                                                            
                                                         <input type="submit" class="btn btn-primary" name="submited" value="submit" id="submit">
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
