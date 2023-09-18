<?php

        if(!isset($_SESSION['user'])){

            $_SESSION['no-login-message'] = "<di>Please login to access Admin Panal.</di>";

            header('location:http://localhost/user/admin/index.php');
        }

?>
