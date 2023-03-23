
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="styleA.css">
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
     *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	
}
body
{
  margin: 0;
	padding: 0;
	color: rgb(194, 46, 46);
	display: left;
	height: 100vh;
	justify-content: center;
	align-items: center;
	
	text-align:center;
}
.container
{
   
   box-sizing: border-box;
   max-width:1200px;
   width: 1100px;
   height: 800px;
   padding: 85px 90px;
   border-radius: 25px;
   background-color:white;
   position:fixed;
}
.container .heading
{
	font-size: 25px;
	font-weight: 200;
	position: relative;
	text-align: left;
	padding: 0 0 20px 0;
  height: 50px;
}
.container .heading::before{
	content: '';
	position: absolute;
	height: 0px;
	left: 0;
	bottom: 0%;
	width: 100%;
	background: linear-gradient(135deg, #bdbed7, #ce0909ca);
	
}

.container form .card-details
{
	margin-top: 25px;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;

}
form .card-details .card-box{
	  width: calc(100% /1 -200px);
	  margin-bottom: 20px;
}
.card-details .card-box .details
{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.card-details .card-box input
{
 height: 30px;
 width: 130%;
 outline: none;
 border-radius: 5px;
 border: 1px solid rgb(244, 243, 243);
 padding: left 65px; 
 font-size: 16px;
 border-bottom-width: 2px ;
 transition: all 0;

}
.card-details .card-box input::focus,.card-details .card-box input::valid{
	border-color: #9b59b6;
}
.form .circular-form .circle-title{
	font-size: 20px;
	font-weight: 500;
	border-bottom: 2px solid;
}
.form .circular-form.category{
	margin-top: 10px;
	margin-bottom: 10px;
}
.form .button{
	text-align: center;
}
.form .button input{
	padding: 10px;
	margin-top: 10px 0;
	height: 100%;
	width: 60%;
	outline: none;
	color: rgb(13, 62, 103);
	border: none;
	font-size: 18px;
	font-weight: 500;
	border-radius: 5px;
  text-align:left;
	background-color: red;
  letter-spacing: linear-gradient(135deg, #05073a, #dc0606ca);
}
form .button input::hover{
	background: linear-gradient(135deg, #05073a, #dc0606ca);
}



    
</style>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <span class="logo_name">Elegant</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin_pannel.html" class="active">
            <i class='' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="course.php">
            <i class='' ></i>
            <span class="links_name">Course</span>
          </a>
        </li>
        <li>
          <a href="viewcourse.php">
            <i class='' ></i>
            <span class="links_name">update course</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="logout.php">
            <i class=''></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="images/profile.png" alt="">
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

   <div class="container">
        <div class="heading"><h2>Add Course<h2></div>
        <form action="course.php"method="post">
            <!--<div class="card-details">
                 <div class="card-box">
                    <span class="details">course name</span>
                    <select name="course" name="course_name" id="course">
		   
                 </div>-->
         
		<div class="card-details">
                 <div class="card-box">
                 
                      <span class="details"  >Add course name</span>
                        
                       <input type="text" name="name" placeholder="" required>
            </div>


<div class="card-details">
                 <div class="card-box">
                 
                      <span class="details"  >Course Type</span>
                        
                       <input type="text" name="name" placeholder="" required>
            </div>

               
              <div class="card-details">
                    <div class="card-box">
                      <span class="details">images</span>
                      <input type="file" name="images" placeholder="" required>
                    </div>  

                 <div class="card-box">
                    <span class="details">description</span>
                    <textarea id="display" name="description" rows="4" cols="50" required></textarea>
                  </div>
     
              <div class="card-details">
                 <div class="card-box">
                    <span class="details"> cstart</span>
                    <input type="date" name="cstart" placeholder=" " required>
                 </div>
              
            
                 <div class="card-box">
                    <span class="details">fees</span>
                    <input type="text"name="fees" placeholder="amount" required>
                 </div>
              </div>  
            
 <div class="card-details">

            <div class="card-details"> 
              <div class="button">
                  <input type="submit" name="submit" value="submit">

              </div>
            </div> 
     </div>
      </form>
      </div>
                 
  
    
  </section>
    
</body>
</html>
<?php

include('connection.php');
$targetDir="images1/";
if(isset($_POST['submit']))
{

$course_name=$_POST['course_name'];
$course_type=$_POST['course_type'];
$images=$_POST['images'];
$description=$_POSTzaaa0
['description'];
$cstart=$_POST['cstart'];
$fees=$_POST['fees'];
$targetFilePath = $targetDir .$images;
move_uploaded_file($_FILES["images"]["tmp_name"],$targetFilePath) ;   
$sql2 = "INSERT INTO tbl_course(`course_name`,`course_type`,`images`,`description`,`cstart`,`fees`)
 VALUES ('$course_name','$course_type','$images','$description','$cstart','$fees')";
  $result1 = mysqli_query($conn,$sql2); 
  if($result1){
   //header("viewcourse.php");
  }else{
   die(mysqli_error($conn));
  }
  if($result1 == true) {
   echo '<script>alert("succesfully created");</script>';
  }
}
?>


