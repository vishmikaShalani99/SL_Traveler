<?php

    include('../config/constant.php'); 

    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_destination WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res == true)
    {
        //echo "Admin Deleted";
        header('location:http://localhost/user/admin/manage-destination.php');
    }
   else
   {
    header('location:http://localhost/user/admin/manage-destination.php');
   }

?>