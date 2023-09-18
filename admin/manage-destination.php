<?php include('partials/menu.php'); ?>

              <!--Menu content section-->
              <div class="main-content">
                <div class="wrapper">
                    <h2>Manage Destinations</h2><br>

                    <a href="http://localhost/user/admin/add-destination.php" class="btn-primary">Add Destination</a><br><br>

                    <table class="tbl-full">
                        <tr>
                            <th>S.N</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Featured</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        
                        $sql = "SELECT *FROM tbl_destination";
                        $res = mysqli_query($conn, $sql);
                         $count = mysqli_num_rows($res);

                         if($count>0)
                            {

                                $sn =0;
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $id=$rows['id'];
                                    $title=$rows['title'];
                                    $image_name=$rows['image_name'];
                                    $featured=$rows['featured'];
                                    $active=$rows['active'];
                                    $sn = $sn+1;

                                        ?>
                                         <tr>
                                            <td><?php echo $sn?></td>
                                            <td><?php echo $title?></td>
                                            <td><img src="http://localhost/user/images/Destination/<?php echo $image_name?>" width="100px" height="70px"></td>
                                            <td><?php echo $featured?></td>
                                            <td><?php echo $active?></td>
                                            <td>
                                            <a href="http://localhost/user/admin/update-destination.php?id=<?php echo $id; ?>" class="btn-secondary">Update Destination</a>
                                            <a href="http://localhost/user/admin/delete-Destination.php?id=<?php echo $id; ?>" class="btn-third">Delete Destination</a></td>
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

