<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="stylereg.css">
    <script src="https://kit.fontawesome.com/c7705f70af.js" crossorigin="anonymous"></script>


</head>
<body>
<form method="POST">
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="fname">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="lname">
       </div>  
        
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender">
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="email" class="input" name="email">
       </div> 
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" id="password" name="password">
          <span>
            <i class="fa-solid fa-eye" id="eye" onclick="toggle()"></i>
            <!-- <i class="fa-solid fa-eye-slash"></i> -->
          </span>
       </div>
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="phone">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address"></textarea>
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn" name="submit">
      </div>
    </div>
</div>	
<?php
include('DatabaseConnection.php');
    if(isset($_POST['submit']))
     {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $qry="insert into cust_reg(fname,lname,password,gender,email,phone,address) 
        values('$fname','$lname','$password','$gender','$email','$phone','$address')";
      
        $qr_login = "insert into login values('$email','$password','user')";
        //  echo $qr_login;
         if (mysqli_query($con, $qry) && mysqli_query($con,$qr_login)==true)
         {
             ?>
             <script>
             alert("registeration successfull");
              window.location="home.html";
             </script>
         <?php
         }
         else
         {
         ?>
         <script>
         alert("Unsuccessfull or email exist");
        //  window.location="shopRegister.php";
         </script>
         <?php
         }
     }
     ?>
</form>
	<script>
        var state=false;
        function toggle(){
            if(state)
            {
                document.getElementById("password").setAttribute("type","password");
                document.getElementById("eye").style.color='#7a797e';

                state=false;
            }
            else{
                document.getElementById("password").setAttribute("type","text");
                document.getElementById("eye").style.color='#5887ef';

                state=true;
            }
        }
    </script>
</body>
</html>