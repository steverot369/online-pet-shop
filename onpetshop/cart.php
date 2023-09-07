<?php
session_start();
include('DatabaseConnection.php');
// $name=$_SESSION['pid'];


    if(isset($_GET['pid']))
     {
        $sql="select * from addpets where pid={$_GET["pid"]}";
        $res=$con->query($sql);
        if($res->num_rows>0)
        {
            $row=$res->fetch_assoc();
            echo "<pre>";
            print_r($row);
            echo "<pre>";
            echo "<table>
            
            
            
            <tr><td colspan=2><img src='{$row["image"]}'></tr></td>
            <tr><td><strong>{$row["name"]}<strong></td>
            
            
            
            
            
            ";
        }
        // else
        // {
        // header("location:custviewpets.php")
        // }
    }
     ?>