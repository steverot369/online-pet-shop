	
<?php
include('DatabaseConnection.php');
// $id=$_GET['updateid'];
// $sql="select * from addpets where pid=$id";
$res=mysqli_query($con,"select * from addpets where pid='".$_GET['pid']."'");
$ar=mysqli_fetch_array($res);
$id=$ar['pid'];

$name=$ar['name'];
$type=$ar['type'];
$gender=$ar['gender'];
$age=$ar['age'];
$Discription=$ar['Discription'];
$keywords=$ar['keywords'];
$price=$ar['price'];

$stock=$ar['stock'];
$status=$ar['status'];


if(isset($_POST['update']))
{
     $pid=$_GET['pid'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $Discription=$_POST['Discription'];
    $keywords=$_POST['keywords'];
    // $image=$_POST['image'];
    $price=$_POST['price'];

    $stock=$_POST['stock'];
    $status=$_POST['status'];
    $result="UPDATE `addpets` SET `pid`='$pid',`name`='$name',`type`='$type',`gender`='$gender',
    `age`='$age',`Discription`='$Discription',`keywords`='$keywords',`price`='$price',`stock`='$stock',`status`='$status' WHERE `pid`='$pid'";
    $data=mysqli_query($con,$result);
    
    if ($data)
         {
             ?>
             <script>
             alert("Updated successfully");
             window.location="viewpets.php";
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
<form method="POST" enctype="multipart/form-data">
<div class="wrapper">
    <div class="title">
      update pet details
    </div>
    <div class="form">
    <div class="inputfield">
          <label>Pet id</label>
          <input type="text" class="input" name="pid" value="<?php echo $id;?>">
       </div> 
       <div class="inputfield">
          <label>Name</label>
          <input type="text" class="input" name="name" value="<?php echo $ar['name'];?>">
       </div>   
       <div class="inputfield">
          <label>Types of pets</label>
          <div class="custom_select">
            <select name="type" >
              <option value=""   
              
              <?php
              if($type=='')
              {
                echo "selected";
              }
              ?>
              
              >Select</option>
              <option value="dog"
              <?php
              if($type=='dog')
              {
                echo "selected";
              }
              ?>
              
              >dog</option>
              <option value="bird"
              
              <?php
              if($type=='bird')
              {
                echo "selected";
              }
              ?>
              >bird</option>
              <option value="rabbit"
              <?php
              if($type=='rabbit')
              {
                echo "selected";
              }
              ?>
              
              >rabbit</option>
              <option value="fish"
              
              <?php
              if($type=='fish')
              {
                echo "selected";
              }
              ?>
              
              >fish</option>
              <option value="chameleons"
              
              <?php
              if($type=='chameleons')
              {
                echo "selected";
              }
              ?>
              >chameleons</option>


            </select>
          </div>
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
              >male</option>
              <option value="female"
              
              <?php
              if($gender=='female')
              {
                echo "selected";
              }
              ?>
              
              >female</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Age</label>
          <div class="custom_select">
            <select name="age">
              <option value=""
              
              <?php
              if($age=='')
              {
                echo "selected";
              }
              ?>
              
              
              >Select</option>
              <option value="0-12months"
              
              <?php
              if($age=='0-12months')
              {
                echo "selected";
              }
              ?>
              
              
              >0-12months</option>
              <option value="1-2years"
              
              <?php
              if($age=='1-2years')
              {
                echo "selected";
              }
              ?>
              >1-2years</option>
              <option value="2-3years"
              
              <?php
              if($age=='2-3years')
              {
                echo "selected";
              }
              ?>
              
              >3-4years</option>
              <option value="3-4years"
              
              
              <?php
              if($age=='3-4years')
              {
                echo "selected";
              }
              ?>
              
              >4-5years</option>
              <option value="4-5years"
              
              
              <?php
              if($age=='4-5years')
              {
                echo "selected";
              }
              ?>
              
              
              >4-5years</option>

            </select>
          </div>
          
       </div>
       <div class="inputfield">
          <label>Discription</label>
          <input type="text" class="input" name="Discription" value="<?php echo $Discription;?>">
       </div>   
       <div class="inputfield">
          <label>keywords</label>
          <input type="text" class="input" name="keywords" value="<?php echo $keywords;?>">
       </div>   
       <!-- <div class="inputfield">
          <label>Add image</label>
          <input type="file" class="input" name="image" value="">
       </div>    -->
       <div class="inputfield">
          <label>Price</label>
          <input type="text" class="input" name="price" value="<?php echo $price;?>">
       </div>  
      <div class="inputfield">
          <label>stock</label>
          <input type="number" class="input" name="stock" value="<?php echo $stock;?>">
       </div> 
       <div class="inputfield">
       <label>status</label>
       <div class="custom_select">
         
          <select name="status">
              <option value=""
              
              <?php
              if($status=='')
              {
                echo "selected";
              }
              ?>
              
              >Select</option>
              <option value="Available"
              <?php
              if($status=='Available')
              {
                echo "selected";
              }
              ?>
              
              >Available</option>
              <option value="Not available"
              <?php
              if($status=='Not available')
              {
                echo "selected";
              }
              ?>
              
              >Not available</option>

            </select>
</div>
       </div>  
       <div class="inputfield">
        <input type="submit" value="update" class="btn" name="update">
      </div> 
    </div>
    
      
       
</div>
</form>  
</body>
</html>


