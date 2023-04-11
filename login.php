
<?php
session_start();
include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $username=$_POST["username"];
  $password=$_POST["password"];

  $sql="select * from tb_login where (username='$username' and password='$password');";
  $result = mysqli_query($conn, $sql);


    
// Set session variables

  if (mysqli_num_rows($result) > 0){

 

    foreach($result as $data)
    {
      $login_id=$data['login_id'];
      $username=$data['username'];
      $_SESSION["login_id"] =$login_id;

      $password=$data['password'];
      $role=$data['role'];
    }
    $_SESSION['role']="$role";
    $_SESSION['username']="$username";
    $_SESSION['auth_user']=[
      'username'=>$username,
      'password'=>$password
    ];

    if($_SESSION['role']=='admin')
    {
      $_SESSION['message']="Welcome";
      $_SESSION['username'] = $username;
      header("location:admin1/index.html");
      exit(0);
    }else if($_SESSION['role']=='user')
    {
      $_SESSION['message']="Welcome";
      $_SESSION['username'] = $username;
       header("location:userpage/userindex.php");
      exit(0);
    }
    else if($_SESSION['role']=='master')
    {
      $_SESSION['message']="Welcome";
      $_SESSION['username'] = $username;
       header("location:master/index.html");
      exit(0);
    }
  }
  else
  {

    echo "<h1>Login Failed!!!!. Invalid account details</h1>";

  }
}
?>




<html>
<head>
<title>LOGIN PAGE</title>
<link rel="stylesheet" type="text/css" href="login_css.css">

</head>
<a href="index.html"></a>
<body>
<form action="login.php" method="POST">
<div class="loginbox">
   
<h2>LOGIN</h2>
<p>USERNAME<p>
<input type="text" name="username" id="t1" placeholder="Enter Username" onkeyup="function_login(this)" required>
<p>PASSWORD</p>
<input type="password" name="password" id="t2" placeholder="Enter Password"  onkeyup="function_login(this)" required>
<input type="submit"  value="LOGIN" name="submit"/>
<a href="admin_pannel.html"></a>
<a href="#"><h4>FORGET PASSWORD?</h4></a> 
</div>
</form>
<script>
 function_login()
      {
  
          var uname= document.getElementById("t1").value;
          var pwd= document.getElementById("t2").value;			

          
          var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
          var letters = /^[A-Za-z]+$/;
		  
		  if(uname=='')
          {
              alert('Please enter the user name.');
          }
          else if(!letters.test(uname))
          {
              alert('User name field required only alphabet characters');
          }
		  else if(pwd=='')
          {
              alert('Enter your Password');
          }
          else if(!pwd_expression.test(pwd))
          {
              alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
          }
		  else
		  {				                            
                 alert('Logged succesfully');
               
          }
      }
</body>
</html>