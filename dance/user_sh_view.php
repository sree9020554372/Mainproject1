<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
   
    <title>View Course</title>
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
       left: 200px;
       width: 85vw;
       height: 89vh;
       background: rgb(250, 250, 250);
      }
       .container .header{
       position: fixed;
       top: 0;
       right: 0;
       width: 85vw;
       height: 10vh;
       background: rgb(242, 244, 243);
       display: flex;
       align-items: center;
       justify-content: center;


      }
      .container .header .nav{
       width: 90%;
       display: flex;
       align-items: center;

      }
      .container .header .nav .search{
      flex: 3;
      display: flex;
      justify-content: center;

      }
      .container .header .nav .search input[type=text]{
       border: none;
       background: #f1f1f1;
       padding: 10px;
       width: 50%;
      }
      .container .header .nav .search button{
       width: 40px; 
       height: 40px;
       border: none;
       display: flex;
        align-items: center;
       justify-content: center;
      }
      .container .header .nav .search button img{
       width: 30px;
       height: 30px;
      }
     .container .header .nav .user{
      flex: 1;
      display: flex;
       justify-content: space-around;
       align-items: center;
      }
     .container .header .nav .user img{
      width: 40px;
       height: 40px;
     }
    .container .header .nav .user .img-case{
     position: relative;
     width: 50px;
     height: 50px; 
     }
    .container .header .nav .user .img-case img{
     position: absolute;
     top: 0;
     left: 10px;
     width: 100%;
     height: 100%;
     }
   

    table.center {
     margin-left: auto; 
     margin-right: auto;
     position:center;
     
    }
      
    th {
    height: 50px;
    vertical-align: bottom;
    color:#D2691E;
   }
   td {
   height: 50px;
   vertical-align: bottom;
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
        
        <li>
          <a href="#">
            <i class='' ></i>
            <span class="links_name">Master</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='' ></i>
            <span class="links_name">Student</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='' ></i>
            <span class="links_name">Setting</span>
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
 
    <h1 align="center">Course List</h1>
    <h1 align="center">Course List</h1>
    <h1 align="center">Course List</h1>
    
    <table class="center" style="width:75%"cellpadding="0" cellspacing="0" border="1" align="center">
              
              <tr>
                  <th>S1.NO</th>
                  <th>class_name</th>
                  <th>Section</th>
                  <th>$creation_date</th>
                 
              </tr>
          
              
              <?php
              include 'connection.php';
              $query=mysqli_query($conn,"select * from add_schedule");
              
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                                  
              <tr>
                  <td><?php echo htmlentities($cnt);?></td>
                  <td><?php echo htmlentities($row['class_name']);?></td>
                  <td><?php echo htmlentities($row['section']);?></td>
                  <td><?php echo htmlentities($row['creation_date']);?></td>
                 
              
               
              
              </tr>
              <?php $cnt=$cnt+1; } ?>
              
      </table>

    </li>
          </ul>
        </div>
      </div>
    </div>
  

  

</body>
</html>