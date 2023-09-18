<?php include('partials/menu.php'); ?>

              <!--Menu content section-->
              <div class="main-content">
                <div class="wrapper">
                    <h2>Manage Guides</h2><br>

                    <a href="http://localhost/user/admin/add-guide.php" class="btn-primary">Add Guide</a><br><br>

                    <table class="tbl-full">
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Featured</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        
                        $sql = "SELECT *FROM tbl_guide";
                        $res = mysqli_query($conn, $sql);
                         $count = mysqli_num_rows($res);

                         if($count>0)
                            {

                                $sn =0;
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $id=$rows['id'];
                                    $guide_name=$rows['guide_name'];
                                    $image=$rows['image'];
                                    $featured=$rows['featured'];
                                    $active=$rows['active'];
                                    $sn = $sn+1;

                                        ?>
                                         <tr>
                                            <td><?php echo $sn?></td>
                                            <td><?php echo $guide_name?></td>
                                            <td><img src="http://localhost/user/images/Destination/<?php echo $image?>" width="100px" height="70px"></td>
                                            <td><?php echo $featured?></td>
                                            <td><?php echo $active?></td>
                                            <td>
                                            <a href="http://localhost/user/admin/update-guide.php?id=<?php echo $id; ?>" class="btn-secondary">Update Guide</a>
                                            <a href="http://localhost/user/admin/delete-guide.php?id=<?php echo $id; ?>" class="btn-third">Delete Guide</a></td>
                                            </tr>
                                        <?php
                                }
                            }
                         ?>
                        
                        
                    </table>


                    
                </div>
              </div>
              <!--Menu content section-->

 <?php include('partials/footor.php'); ?>

