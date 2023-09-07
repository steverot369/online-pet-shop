<html>
<head>
<title>Employee Details</title>
<link rel="stylesheet" href="adminstyle.css">

</head>

<body>
<body bgcolor="#fff">

<div class="menu">

<div class="leftmenu">
    <h4> Welcome admin </h4>
</div>

<div class="rightmenu">
    <ul>
        <!-- <li id="firstlist">Home</li> -->
        <li id="firstlist"><a href="adminhome.php"> Home</a></li>
        <li><a href="addpets.php"> Add product</a></li>
        <li><a href="viewpets.php"> Manage product</a></li>
        <li><a href="viewusers.php"> View users</a></li>
        <!-- <li>Contact</li> -->
    </ul>
</div>

</div>
    <div class="table">
<table id="customers" cellpadding="10" cellspacing="3">
<!-- <tr> <th colspan="12"><b>Display pets</b></th> -->
<h1 class="head">Manage Products</h1>
</tr>
<tr>
<th>pet id</th>

<th>Name</th>
<th>Type</th>
<th>Gender</th>
 <th>Age</th>
 <th>Discription</th>
 <th>keywords</th>
 <th>Image</th>
 <th>Price</th>
 <th>stock</th>
 <th>status</th>


 
<th colspan="2">Actions</th>
</tr>
<?php 
include('DatabaseConnection.php');
$sql="select * from addpets order by pid";
$result=mysqli_query($con, $sql);
// $rows=mysqli_num_rows($result);
// if ($rows)
// {
while($ar=mysqli_fetch_assoc($result))
{
    ?>
<tr>
 <td align="center"><?php echo $ar ['pid']; ?></td>
 <td align="center"><?php echo $ar ['name']; ?></td>
<td align="center"><?php echo $ar ['type']; ?></td>
<td align="center"><?php echo $ar ['gender']; ?></td>
<td align="center"><?php echo $ar ['age']; ?></td>
<td align="center"><?php echo $ar ['Discription']; ?></td>
<td align="center"><?php echo $ar ['keywords']; ?></td>
<td align="center"><img src="<?php echo $ar["image"];?>" height="100px" width="100px"></td>
<td align="center"><?php echo $ar ['price']; ?></td>
<td align="center"><?php echo $ar ['stock']; ?></td>
<td align="center"><?php echo $ar ['status']; ?></td>

   



 <td align="center"><a class="button-2" href="updatepets.php?pid=<?php echo $ar['pid']; ?>">Update</a></td>
<td align="center"><font color="#CD113B"><a  class="button-1" href="deletepets.php?delete=<?php echo $ar['pid']; ?>">Delete</a></font></td>
</tr>
<?php
}

// echo "Back to Home. <a href='adminhome.php'>Click Here</a><br><br>";
?>
</div>
</table>
</body>
</html>