<?php include('partials/menu.php'); ?>
          <!--Menu content section-->
          <div class="main-content">
                <div class="wrapper">
                    <h2>Update Admin</h2><br><br>
                    <?php
                            $id = $_GET['id'];
                            $sql = "SELECT *FROM tbl_admin WHERE id=$id";
                            $res = mysqli_query($conn, $sql);

                            if($res == true){
                                $count = mysqli_num_rows($res);

                                if($count>0)
                                {
                                        //echo "Admin Available";
                                        $rows=mysqli_fetch_assoc($res);
                                        $full_name=$rows['full_name'];
                                        $username=$rows['username'];
                                }else{
                                    header('location:http://localhost/user/admin/manage-admin.php');
                                }
                            }

                    ?>


                    <form action="" method="POST">
                        <table class ="tbl-30">
                            <tr>
                            <td>Full Name:</td> 
                            <td><input type="text" name="full_name" value="<?php echo $full_name ?>"></td> 
                            </tr>

                            <tr>
                            <td>Username:</td> 
                            <td><input type="text" name="username" value ="<?php echo $username?>"></td> 
                            </tr>

                            <tr>
                            <td colspan="2"> <input type="hidden" name="id" value="<?php echo $id;?>">
                            <input type="submit" name="submit" value="Update Admin" class="btn-secondary"></td> 
                            
                            </tr>


                        </table>

                    </form>
                    </div>
              </div>
              <!--Menu content section-->

        <?php
            if(isset($_POST['submit']))
            {
                //echo "Button Clicked";
                $id = $_POST['id'];
                $full_name = $_POST['full_name'];
                $username = $_POST['username'];

                $sql = "UPDATE tbl_admin SET 
                full_name ='$full_name',
                username = '$username'
                WHERE id ='$id'
                ";

                $res = mysqli_query($conn, $sql);

                if($res == true)
                {
                    echo" Expected id updated";
                    header('location:http://localhost/user/admin/manage-admin.php');
                }else{
                    echo"Failed to update";
                }

            }


        ?>


              

<?php include('partials/footor.php'); ?>