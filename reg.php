<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $username = $_POST['username'];
  $password = $_POST['password'];
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
                $l_id=$data['login_id'];
                $sql1="insert into tbl_reg(`login_id`,`full_name`,`email`,`phone_no`,`dob`,`gender`,`address`,`status`) 
                values('$l_id','$full_name','$email','$phone_no','$dob','$gender','$address',3)";
                if($conn->query($sql1)=== TRUE)
                {
                  echo "<script> alert('Registered Successfully'); </script>";
                  header('location:login.php');
                }
              }
            }
    }
    }
  }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
   
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="reg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
   
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">

      <form  id="form" name="form"  action="reg.php" method="post" autocomplete="off">
        
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" id="full_name" onkeyup="fnameValidation(this)" name="full_name" placeholder="Enter your fullname" required ><br>
            <span id="fame" class="new" style="color: red; font-size: small;"></span>
          </div>

         
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" id="email" onkeyup="emailValidation(this)" name="email" placeholder="Enter your email"  required><br>
            <span id="mail" class="new" style="color: red; font-size: small;"></span>

          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="phone" id="phone_no" onkeyup="phn_noValidation(this)" maxlength="10" name="phone_no" placeholder="Enter your number" required ><br>
            <span id="phn" class="new" class="new" style="color: red; font-size: small;"></span>
          </div>
         
            <div class="input-box">
             <span class="details"> Date of Birth</span>
             <input type="date" id="dob" name="dob" placeholder="Enter date" min="1900-01-01" max="2022-01-01" required  ><br>
             <span id="dofb" class="new"class="new" style="color: red; font-size: small;"></span>
           </div>
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
       

<!--address-->
    <div class="user-details">
        <div class="input-box">
         <span class="details">Address</span>
             <input type="text" id="address" onkeyup="addressValidation(this)"  name="address" placeholder="Enter your Address" required ><br>
             <span  id="adrs"  class="new" style="color: red; font-size: small;"></span>
        </div>
          <div class="input-box">
            <span class="details">User Name</span>
            <input type="text" id="username"  onkeyup="usernameValidation(this)" name="username" placeholder="Enter Username" required><br>
            <span id="uname" class="new"  style="color: red; font-size: small;"></span>
          </div>
    </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" onkeyup="passwordValidation(this)" name="password" placeholder="Enter  your password" required><br>
            <span id="pwd" class="new" class="new" style="color: red; font-size: small;"></span>
         
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" id="cpassword" onkeyup="cpasswordValidation(this)" name="cpassword" placeholder="Enter Confirm Password " required ><br>
            <span id="pwd1" class="new" class="new" style="color: red; font-size: small;"></span>
          </div>
    </div>
   
        <div class="button">
          <input type="submit" name="submit" value="Register" >
         
        </div>
      </form>
    </div>
  </div>
 
  <script>

    // Full name //

    function fnameValidation(inputTxt){
     
     var regx = /^[a-zA-Z ]+$/ ;
     var textField = document.getElementById("fame");
         
     if(inputTxt.value != '' ){
     
         if(inputTxt.value.length >= 2){
         
             if(inputTxt.value.match(regx)){
                 textField.textContent = '';
                 textField.style.color = "green";
                     
             }else{
                 textField.textContent = 'only characters are allowded to insert!';
                 textField.style.color = "red";
             }  
         }else{
             textField.textContent = 'your input must more than two chracters';
             textField.style.color = "red";
         }  
     }else{
         textField.textContent = 'your are not allowed  to leave a field  empty';
         textField.style.color = "red";
     }
    }

 

//email//

function emailValidation(inputTxt){
    // ^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$
    var regx = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    var textField = document.getElementById("mail");
       
    if(inputTxt.value != '' ){
        if(inputTxt.value.match(regx)){
            textField.textContent = '';
            textField.style.color = "green";
        }else{
            textField.textContent = 'email id  is not valid!!! please insert a valid one';
            textField.style.color = "red";
        }  
    }else{
        textField.textContent = 'your are not allowed  to leave a field  empty';
        textField.style.color = "red";
    }
}

//pwd//

function passwordValidation(inputTxt){
   
    var regx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}/;
    var textField = document.getElementById("pwd");
       
    if(inputTxt.value != '' ){
            if(inputTxt.value.match(regx)){
                textField.textContent = '';
                textField.style.color = "green";
                   
            }else{
                textField.textContent = 'Must contain at least one number and one uppercase and lowercase letter and aleast 5 characters';
                textField.style.color = "red";
            }    
    }else{
        textField.textContent = 'your are not allowed  to leave a field  empty';
        textField.style.color = "red";
    }
}

//cpwd//

function cpasswordValidation(inputTxt){
   
    var regx =  document.getElementById("pwd").value;
    var regy =  document.getElementById("pwd1").value;
    var textField = document.getElementById("pwd1");
    var textField1 = document.getElementById("pwd");
       
    if(inputTxt.value != '' ){    
            if(regx == regy){
                textField.textContent = '';
                textField.style.color = "green";
                   
            }else{
                textField.textContent = 'Entered to passwords are not same!!';
                textField.style.color = "red";
            }  
        }else{
            textField.textContent = '';
            textField.style.color = "red";
        }  
}


//number //

function phn_noValidation(inputTxt){
   
   var regx = /^\d{10}$/;
   var textField = document.getElementById("phn");
       
   if(inputTxt.value != '' ){
       if(inputTxt.value.match(regx)){
           textField.textContent = '';
           textField.style.color = "green";
       }else{
           textField.textContent = 'Your Mobile Number Is Not    Valid.';
           textField.style.color = "red";
       }  
   }else{
       textField.textContent = 'your are not allowed  to leave a field  empty';
       textField.style.color = "red";
   }
}


//address//
function addressValidation(inputTxt){
     
     var regx = /^[a-zA-Z]+$/;
     var textField = document.getElementById("adrs");
         
     if(inputTxt.value != ''){
     
         if(inputTxt.value.length >= 2){
         
             if(inputTxt.value.match(regx)){
                 textField.textContent = '';
                 textField.style.color = "green";
                     
             }else{
                 textField.textContent = 'only characters are allowded to insert!';
                 textField.style.color = "red";
             }  
         }else{
             textField.textContent = 'your input must more than two chracters';
             textField.style.color = "red";
         }  
     }else{
         textField.textContent = 'your are not allowed  to leave a field  empty';
         textField.style.color = "red";
     }
    }

    function usernameValidation(inputTxt){
     
     var regx = /^[a-zA-Z]+$/;
     var textField = document.getElementById("uname");
         
     if(inputTxt.value != ''){
     
         if(inputTxt.value.length >= 2){
         
             if(inputTxt.value.match(regx)){
                 textField.textContent = '';
                 textField.style.color = "green";
                     
             }else{
                 textField.textContent = 'only characters are allowded to insert!';
                 textField.style.color = "red";
             }  
         }else{
             textField.textContent = 'your input must more than two chracters';
             textField.style.color = "red";
         }  
     }else{
         textField.textContent = 'your are not allowed  to leave a field  empty';
         textField.style.color = "red";
     }
    }


    

</script>
</body>
</html>

