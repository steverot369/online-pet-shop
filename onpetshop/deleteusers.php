<?php
include('DatabaseConnection.php');
if(isset($_GET['delete']))
{
$id = $_GET['delete'];
$qry  = "delete from cust_reg where cid=$id ";


if (mysqli_query($con, $qry)) {
?>
    <script>
        alert ("Successfully REMOVED users");
        window.location = "viewusers.php";
    </script>
<?php
} else {
?>
    <script>
        alert ("Error");
        // window.location = "AdminVerifyArtist.php";
    </script>

<?php
}

}
?>