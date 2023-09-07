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
        <li id="firstlist"><a href="home.html"> Home</a></li>
                    <li><a href="userprofile.php"> manage profile</a></li>
                    <li><a href="cart.php"> view cart</a></li>
                    <li><a href="buypets.php"> buy pet</a></li>
                    <li><a href="home.html"> logout</a></li>
        <!-- <li>Contact</li> -->
    </ul>
</div>

</div>
    <div class="table">
<table id="customers" cellpadding="10" cellspacing="3">
<!-- <tr> <th colspan="12"><b>Display pets</b></th> -->
<form method="POST" action='{$_SERVER["REQUEST_URI"]}'>
<h1>view Pets</h1>
</tr>
<tr>

<th>Name</th>
<th>Type</th>
<th>Gender</th>
 <th>Age</th>
 <th>Discription</th>
 <th>Image</th>
 <th>price</th>
 <th>Quantity</th>


 
<th colspan="2">Actions</th>
</tr>
<?php 
session_start();
include('DatabaseConnection.php');
$sql="select * from addpets where pid='".$_GET['pid']."'";
$result=mysqli_query($con, $sql);
// $rows=mysqli_num_rows($result);
// if ($rows)
// {
while($ar=mysqli_fetch_assoc($result))
{
    ?>
<tr>

 <td align="center"><?php echo $ar ['name']; ?></td>
<td align="center"><?php echo $ar ['type']; ?></td>
<td align="center"><?php echo $ar ['gender']; ?></td>
<td align="center"><?php echo $ar ['age']; ?></td>
<td align="center"><?php echo $ar ['Discription']; ?></td>
<td align="center"><img src="<?php echo $ar["image"];?>" height="200px" width="200px"></td>
<td align="center"><?php echo $ar ['price']; ?></td>

   
<td><input type ="hidden" class="qn" required> 
<td><input type ="hidden" value='{$ar["name"]}' name="pname">
<input type ="hidden" value='{$ar["price"]}' name="price">
</td>


<td align="center"><font color="#CD113B"><a  class="button-1" href="viewcart.php?pid=<?php echo $ar['pid']; ?>">Add to cart</a></font></td>
</tr>
<?php
}

// echo "Back to Home. <a href='adminhome.php'>Click Here</a><br><br>";
?>
<?php
if(isset($_POST['pid']))
{
    if(isset($_SESSION["cart"])){

    }
    else{
        $item=array(
            'pid'=>$_GET['pid'],
            'pname'=>$_GET['pname']


        );
        $_SESSION["cart"][0]=$item;
        echo "<script>alert('product added');</script>";
        header("location:viewcart.php");
    }
}
?>




</div>
</table>
</form>
</body>
</html>