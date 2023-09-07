	
<?php
include('DatabaseConnection.php');
// $id=$_GET['updateid'];
// $sql="select * from addpets where pid=$id";
$res=mysqli_query($con,"select * from cust_reg where cid='".$_GET['cid']."'");
$ar=mysqli_fetch_array($res);
$id=$ar['cid'];

$fname=$ar['fname'];
$lname=$ar['lname'];
$gender=$ar['gender'];
$email=$ar['email'];
$password=$ar['password'];
$phone=$ar['phone'];

$address=$ar['address'];


if(isset($_POST['update']))
{
    $cid=$_POST['cid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $result="UPDATE `cust_reg` SET `cid`='$cid',`fname`='$fname',`lname`='$lname',`gender`='$gender',`email`='$email',
    `password`='$password',`phone`='$phone',`address`='$address' WHERE `cid`='$cid'";
    $data=mysqli_query($con,$result);
    
    if ($data)
         {
             ?>
             <script>
             alert("Updated successfully");
             window.location="userprofile.php";
             </script>
         <?php
         }
         else
         {
         ?>
         <script>
         alert("Signup Unsuccessfull");
        //  window.location="shopRegister.php";
         </script>
         <?php
         }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update pet details</title>
	<link rel="stylesheet" href="stylereg.css">
    <script src="https://kit.fontawesome.com/c7705f70af.js" crossorigin="anonymous"></script>

</head>
<body>
<form method="POST">
<div class="wrapper">
    <div class="title">
      Update Form
    </div>
    <div class="form">
    <div class="inputfield">
          <label>Cid</label>
          <input type="text" class="input" name="cid" value="<?php echo $id ?>">
       </div>  
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="fname" value="<?php echo $fname ?>">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="lname" value="<?php echo $lname ?>">
       </div>  
        
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender">
              <option value=""
              
              <?php
              if($gender=='')
              {
                echo "selected";
              }
              ?>
             
              
              >Select</option>
              <option value="male"
              
              <?php
              if($gender=='male')
              {
                echo "selected";
              }
              ?>
             
              
              >Male</option>
              <option value="female"
              
              <?php
              if($gender=='female')
              {
                echo "selected";
              }
              ?>
             
              >Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="email" class="input" name="email" value="<?php echo $email ?>">
       </div> 
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" id="password" name="password" value="<?php echo $password ?>">
          <span>
            <i class="fa-solid fa-eye" id="eye" onclick="toggle()"></i>
            <!-- <i class="fa-solid fa-eye-slash"></i> -->
          </span>
       </div>
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="phone" value="<?php echo $phone ?>">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address" value="<?php echo $address ?>"></textarea>
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="update" class="btn" name="update">
      </div>
    </div>
</div>	
    
      
       
</div>
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
</form>  
</body>
</html>


