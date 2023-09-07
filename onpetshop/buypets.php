<html>
<head>
<title>Employee Details</title>
<link rel="stylesheet" href="adminstyle.css">

</head>

<body>
<body bgcolor="#fff">

<div class="menu">

<div class="leftmenu">
    <h4><?php
                    session_start();
                    echo $_SESSION['username'];
                    ?> </h4>
</div>

<div class="rightmenu topnav">
    <ul>
        <!-- <li id="firstlist">Home</li> -->
        <li id="firstlist"><a href="home.html"> Home</a></li>
                    <li><a href="userprofile.php"> manage profile</a></li>
                    <li><a href="cart.php"> view cart</a></li>
                    <li><a href="buypets.php"> buy products</a></li>
                    <li><a href="home.html"> logout</a></li>
                
        <!-- <li>Contact</li> -->
    </ul>
</div>

</div>
    <div class="table">
<table id="customers" cellpadding="10" cellspacing="3">
<!-- <tr> <th colspan="12"><b>Display pets</b></th> -->
<h1>Purchase Pets</h1>
</tr>
<tr>
<!-- <th>pet id</th> -->

<th>Name</th>
<th>Type</th>
<th>Gender</th>
 <th>Age</th>
 <th>Discription</th>
 <!-- <th>keywords</th> -->
 <th>Image</th>
 <th>Price</th>

 <!-- <th>stock</th> -->
 <!-- <th>status</th> -->


 
<th>Actions</th>
</tr>
<?php 
include('DatabaseConnection.php');
$sql="select * from addpets where status='available'";
$result=mysqli_query($con, $sql);
// $rows=mysqli_num_rows($result);
// if ($rows)
// {
// $name1=$_SESSION['name'];
while($ar=mysqli_fetch_assoc($result))
{
    ?>
<tr>


 <td align="center"><?php echo $ar ['name']; ?></td>
<td align="center"><?php echo $ar ['type']; ?></td>
<td align="center"><?php echo $ar ['gender']; ?></td>
<td align="center"><?php echo $ar ['age']; ?></td>
<td align="center"><?php echo $ar ['Discription']; ?></td>
<td align="center"><img src="<?php echo $ar["image"];?>" height="150px" width="150px"></td>
<td align="center"><?php echo $ar ['price']; ?></td>


  



 <td align="center"><a class="button-2" href="custviewpets.php?pid=<?php echo $ar['pid'];?>">View details</a></td>

</tr>
<?php
}

// echo "Back to Home. <a href='adminhome.php'>Click Here</a><br><br>";
?>
</div>
</table>
</body>
</html>