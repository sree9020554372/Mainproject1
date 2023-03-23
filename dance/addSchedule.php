<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
   
    <title>View Course</title>
    
    <link href='https




://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"  href="styleA.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
       * {

      margin: 0%;
      padding: 0%;
      box-sizing: border-box;
      font-family: 'poppins',sans-serif;
      }
      body{
      min-height: 100vh;
      background: #fcfdfc;
      }

      a{
      text-decoration: none;
      }
      li{
      list-style: none;
      }
      h6{
      color: rgb(245, 245, 248);
      padding: 10px;
      }
      h1,h2{
      color: white;
      }
      h3{
      color: #999;
      }
     .btn{
      background:#f05462;
      color: white;
      padding: 5px 10px;
      text-align: center;
      }
     .btn .hover{
      color: #f05462;
      background: white;
      padding: 3px 8px;
      border: 2px solid #f05462;

      }

      .side-menu{
       position: absolute;
       background:#f05462 ;
       width: 20pvh;
       min-height: 100vh;
       display: flex;
       flex-direction: column;
       }
      .side-menu .brand-name{
      height: 10vh;
      display: flex;
      align-items: center;
      justify-content: center;
      }
      .side-menu li{
      font-size: 24px;
      padding: 10px 40px;
      color:rgb(245, 249, 245);
      display: flex;
      align-items: center;
      }
     .side-menu li:hover{
      background: rgb(14, 15, 0);
       color: red;
      }
      .container {
       position: fixed;
       right: 0;
       left: 100px;
       width: 500px;
       height: 60vh;
       background: rgb(250, 250, 250);
      }
      
      
   

   
  .button {
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background:   #ea483c;
  color:  #D2691E;;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
  
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
          <a href="addSchedule.php">
            <i class='' ></i>
            <span class="links_name">Add Schedule</span>
          </a>
        </li>
        <li>
          <a href="manage_schedules.php">
            <i class='' ></i>
            <span class="links_name">manage schedule</span>
          </a>
        </li>
        <li>
        
        
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

<form action="addSchedule.php"  method="post" onsubmit="return validate()" onsubmit="return validate()">
<div class="container" style="margin-left:250px;padding-bottom:150px;padding-top: 7%;">
    <div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #000000; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">Add Schedules</h3>
               
                    <div class="form-horizontal">

                    <div class="form-group" style="margin-top:10px;">
                                <label class="control-label col-sm-2"  >class_name</label>
                         <div class="col-sm-10">
                            <input type="text" id="cname" name="class_name" class="form-control" required/>
                            
                            </div>
                            <div>
                                <span id="fname_error"></span>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top:10px;">
                                <label class="control-label col-sm-2"  >section</label>
                         <div class="col-sm-10">
                            <input type="time" id="section" name="section" class="form-control" required/>
                            
                            </div>

                            <div class="form-group" style="margin-top:10px;">
                                <label class="control-label col-sm-2"  >creation_date</label>
                           <div class="col-sm-10">
                            <input type="date" id="Cdate" name="creation_date" class="form-control" required/>
                            
                            </div> 
                            
                    <div class="button">
                    <input type="submit"name="submit" value="submit">
                    </div>    

 
                               
</div>
</form>
</body>
</html>

<?php

include('connection.php');
if(isset($_POST['submit']))
{

$class_name=$_POST['class_name'];
$section=$_POST['section'];
$creation_date=$_POST['creation_date'];


  
$sql2 = "INSERT INTO add_schedule(class_name,section,Creation_date)
 VALUES ('$class_name','$section','$creation_date')";
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