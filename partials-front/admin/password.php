<?php include('partials/menu.php'); ?>
<div class="main-content">
                <div class="wrapper">
                    <h2>Change Password</h2><br><br>

                    <?php
                        if(isset($_GET['id'])) 
                        {
                            $id = $_GET['id'];
                            
                        }
                    ?>
                    
                    <form action="" method="POST">
                        <table class ="tbl-30">
                            <td>Current Password:</td> 
                            <td><input type="password" name="current_password" placeholder=" Current password"></td> 
                            </tr>
                            <td>New Password:</td> 
                            <td><input type="password" name="new_password" placeholder=" New password"></td> 
                            </tr>
                            <td>Confirm Password:</td> 
                            <td><input type="password" name="confirm_password" placeholder="Confirm  password"></td> 
                            </tr>

                            <tr>
                            <td colspan="2">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="submit" name="submit" value="Change Password" class="btn-secondary"></td> 
                            
                            </tr>


                        </table>

                    </form>
                    </div>
</div>

<?php
        if(isset($_POST['submit']))
        {
            //echo "Clicked";
            $id =$_POST['id'];
            $current_password = md5($_POST['current_password']);
            $new_password = md5($_POST['new_password']);
            $confirm_password =md5($_POST['confirm_password']);

            $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password ='$current_password'";

            $res=mysqli_query($conn, $sql);

            if($res==true){
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //echo"User found";

                    if($new_password==$confirm_password)
                    {
                        //echo "Password Matched";
                        $sql2 = "UPDATE tbl_admin SET
                        password='$new_password'
                        WHERE id=$id";

                        $res2 =mysqli_query($conn, $sql2);

                        if($res2==true){
                            echo "Password Changed";
                        }else{
                            echo "Failed to change password";
                        }

                    }else{
                        echo "Password did not match";
                    }

                }else{
                    echo"User not found";
                }
            }
        }
?>




<?php include('partials/footor.php'); ?>