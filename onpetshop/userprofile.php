<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer Home</title>
   <link rel="stylesheet" href="adminstyle.css">

</head>
<body>
    
        <div class="menu">

            <div class="leftmenu">
                <h4> 
                    <?php
                    session_start();
                    echo $_SESSION['username'];
                    ?></h4>
            </div>

            <div class="rightmenu">
                <ul>
                    <!-- <li id="firstlist">Home</li> -->
                    <li id="firstlist"><a href="home.html"> Home</a></li>
                    <li><a href="userprofile.php"> manage profile</a></li>
                    <li><a href="viewpets.php"> view cart</a></li>
                    <li><a href="buypets.php"> buy pet</a></li>
                    <li><a href="home.html"> logout</a></li>

                    <!-- <li>Contact</li> -->
                </ul>
            </div>

        </div>
        

    </div>
    <!-- /* coding with nick */ -->
    <div class="table">
<table id="customers" cellpadding="10" cellspacing="3">
<!-- <tr> <th colspan="12"><b>Display pets</b></th> -->
<h1>Manage Profile</h1>
</tr>
<tr>

<th>cid</th>
<th>fname</th>
<th>lname</th>
 <th>password</th>
 <th>gender</th>
 <th>email</th>
 <th>phone</th>
 <th>Address</th>


 
<th>Actions</th>
</tr>
<?php 
// session_start();
include('DatabaseConnection.php');
// $cid=$_SESSION['cid'];
$id=$_SESSION['username'];
$sql="select * from cust_reg where email='$id'";
$result=mysqli_query($con, $sql);
// $rows=mysqli_num_rows($result);
// if ($rows)
// {
while($ar=mysqli_fetch_assoc($result))
{
    ?>
<tr>
 <td align="center"><?php echo $ar ['cid']; ?></td>
 <td align="center"><?php echo $ar ['lname']; ?></td>
<td align="center"><?php echo $ar ['fname']; ?></td>
<td align="center"><?php echo $ar ['password']; ?></td>
<td align="center"><?php echo $ar ['gender']; ?></td>
<td align="center"><?php echo $ar ['email']; ?></td>
<td align="center"><?php echo $ar ['phone']; ?></td>
<td align="center"><?php echo $ar ['address']; ?></td>

   



 <!-- <td align="center"><a class="button-2" href="updatepets.php?pid=>Update</a></td> -->
<td align="center"><font color="#CD113B"><a  class="button-2" href="updateprofile.php?cid=<?php echo $ar['cid']; ?>">Update</a></font></td>
</tr>
<?php
}

// echo "Back to Home. <a href='adminhome.php'>Click Here</a><br><br>";
?>
</div>
</body>
</html>