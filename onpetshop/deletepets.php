<?php
include('DatabaseConnection.php');
if(isset($_GET['delete']))
{
$id = $_GET['delete'];
$qry  = "delete from addpets where pid=$id ";


if (mysqli_query($con, $qry)) {
?>
    <script>
        alert ("Successfully REMOVED");
        window.location = "viewpets.php";
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