<?php include('partials/menu.php'); ?>

              <!--Menu content section-->
              <div class="main-content">
                <div class="wrapper">
                    <h2>Manage Admin</h2><br>


                    <a href="add-admin.php" class="btn-primary">Add Admin</a><br><br>

                    <table class="tbl-full">
                        <tr>
                            <th>S.N</th>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>Action</th>
                        </tr>

                        <?php
                        
                           $sql = "SELECT *FROM tbl_admin";
                           $res = mysqli_query($conn, $sql);

                           if($res==true){
                            $count = mysqli_num_rows($res);

                            if($count>0)
                            {
                                $sn =0;
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];
                                    $sn = $sn+1;

                                        ?>
                                         <tr>
                                            <td><?php echo $sn?></td>
                                            <td><?php echo $full_name?></td>
                                            <td><?php echo $username?></td>
                                            <td>
                                            <a href="http://localhost/user/admin/password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                            <a href="http://localhost/user/admin/updateadmin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                            <a href="http://localhost/user/admin/deleteadmin.php?id=<?php echo $id; ?>" class="btn-third">Delete Admin</a></td>
                                            </tr>
                                        <?php
                                }
                       
                             }else{

                             }
                            }
                        ?>
                        
                    </table>

                    
                </div>
              </div>
              <!--Menu content section-->


              <?php include('partials/footor.php'); ?>


