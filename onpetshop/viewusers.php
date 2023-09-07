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
<h1 class="head">Manage users</h1>
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
include('DatabaseConnection.php');
$sql="select * from cust_reg order by cid";
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
<td align="center"><font color="#CD113B"><a  class="button-1" href="deleteusers.php?delete=<?php echo $ar['cid']; ?>">Delete</a></font></td>
</tr>
<?php
}

// echo "Back to Home. <a href='adminhome.php'>Click Here</a><br><br>";
?>
</div>
</table>
</body>
</html>