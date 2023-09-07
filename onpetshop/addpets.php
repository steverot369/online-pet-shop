<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add pets</title>
	<link rel="stylesheet" href="stylereg.css">
    <script src="https://kit.fontawesome.com/c7705f70af.js" crossorigin="anonymous"></script>


</head>
<body>
<form method="POST" enctype="multipart/form-data">
<div class="wrapper">
    <div class="title">
      ADD PETS
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Name</label>
          <input type="text" class="input" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name'];}?>">
       </div>   
       <div class="inputfield">
          <label>Types of pets</label>
          <div class="custom_select">
            <select name="type" value="<?php if(isset($_POST['type'])) { echo $_POST['type'];}?>">
              <option value="">Select</option>
              <option value="dog">dog</option>
              <option value="bird">bird</option>
              <option value="rabbit">rabbit</option>
              <option value="fish">fish</option>
              <option value="chameleons">chameleons</option>


            </select>
          </div>
       </div>  
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender" >
              <option value="">Select</option>
              <option value="male" value="<?php if(isset($_POST['gender'])) { echo $_POST['gender'];}?>">male</option>
              <option value="female" value="<?php if(isset($_POST['gender'])) { echo $_POST['gender'];}?>">female</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Age</label>
          <div class="custom_select">
            <select name="age" value="<?php if(isset($_POST['age'])) { echo $_POST['age'];}?>">
              <option value="">Select</option>
              <option value="0-12months">0-12months</option>
              <option value="1-2years">1-2years</option>
              <option value="2-3years">3-4years</option>
              <option value="3-4years">4-5years</option>
              <option value="4-5years">5-6years</option>

            </select>
          </div>
          
       </div>
       <div class="inputfield">
          <label>Discription</label>
          <input type="text" class="input" name="Discription" value="<?php if(isset($_POST['Discription'])) { echo $_POST['Discription'];}?>">
       </div>   
       <div class="inputfield">
          <label>keywords</label>
          <input type="text" class="input" name="keywords" value="<?php if(isset($_POST['keywords'])) { echo $_POST['keywords'];}?>">
       </div>   
       <div class="inputfield">
          <label>Add image</label>
          <input type="file" class="input" name="image1">
       </div>   
      
      <div class="inputfield">
          <label>stock</label>
          <input type="number" class="input" name="stock" value="<?php if(isset($_POST['stock'])) { echo $_POST['stock'];}?>">
       </div> 
       <div class="inputfield">
       <label>status</label>
       <div class="custom_select">
         
          <select name="status" value="<?php if(isset($_POST['status'])) { echo $_POST['status'];}?>">
              <option value="">Select</option>
              <option value="Available">Available</option>
              <option value="Not available">Not available</option>

            </select>
</div>
       </div>  
       <div class="inputfield">
        <input type="submit" value="add pets" class="btn" name="submit">
      </div> 
    </div>
    
      
       
</div>	
</form>
<?php
include('DatabaseConnection.php');
    if(isset($_POST['submit']))
     {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $Discription = $_POST['Discription'];
        $keywords = $_POST['keywords'];
        
        // $image=$_POST['image'];
        $stock = $_POST['stock'];
        $status = $_POST['status'];

        $file=$_FILES['image1'];
        
        // print_r($files);
        $filename=$file['name'];
        $filerror=$file['error'];
        $filetemp=$file['tmp_name'];
        $fileext=explode('.',$filename);
        $filecheck=strtolower(end($fileext));
        $fileextstored=array('png','jpg');
        if(in_array($filecheck,$fileextstored))
        {
          $destination='petphotos/'.$filename;
          move_uploaded_file($filetemp,$destination);
       

       
        }

        $qry="INSERT INTO `addpets`(`name`, `type`, `gender`, `age`, `Discription`, `keywords`, `image`, `stock`, `status`)
         VALUES ('$name','$type','$gender','$age','$Discription','$keywords','$destination','$stock','$status')";
        // $qr_login = "insert into login(id,username,password,usertype,status) values('',(select MAX(sid) from shop_reg) ,'$email','$password','manufacture','approved')";
        //  echo $qr_login;
        if (mysqli_query($con, $qry)==true)
         {
             ?>
             <script>
             alert("Signup successfull");
            //  window.location="Login.html";
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