<?php include('partials/menu.php'); ?>

              <!--Menu content section-->
              <div class="main-content">
                <div class ="new">
                    <h2> Manage Bookings</h2>

                    <table class="tbl-full">
                        <tr>
                            <th>S.N</th>
                            <th> Name</th>
                            <th>Contact number</th>
                            <th>Email</th>
                            <th>Adress</th>
                            <th>Arrival Date</th>
                            <th>Leaving Date</th>
                            <th>Destination or P.N</th>
                            <th>Adults</th>
                            <th>Kids</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        <?php
                        
                        $sql = "SELECT *FROM tbl_book";
                        $res = mysqli_query($conn, $sql);

                        if($res==true){
                         $count = mysqli_num_rows($res);

                         if($count>0)
                         {
                             $sn =0;
                             while($rows=mysqli_fetch_assoc($res))
                             {
                                 $id=$rows['id'];
                                 $name=$rows['name'];
                                 $phone = $rows['phone'];
                                 $email = $rows['email'];
                                 $address = $rows['adress'];
                                 $arrival_date = $rows['arrival_date'];
                                 $leaving_date = $rows['leaving_date'];
                                 $destination= $rows['destination'];
                                 $adult = $rows['adult'];
                                 $kids = $rows['kids'];
                                 $status = $rows['status'];
                                 $sn = $sn+1;

                                     ?>
                                      <tr>
                                         <td><?php echo $sn?></td>
                                         <td><?php echo $name?></td>
                                         <td><?php echo $phone?></td>
                                         <td><?php echo $email?></td>
                                         <td><?php echo $address?></td>
                                         <td><?php echo $arrival_date?></td>
                                         <td><?php echo $leaving_date?></td>
                                         <td><?php echo $destination?></td>
                                         <td><?php echo $adult?></td>
                                         <td><?php echo $kids?></td>
                                         <td><?php echo $status?></td>
                                         <td>
                                            <a href="http://localhost/user/admin/email.php?id=<?php echo $id; ?>" class="btn-secondary2">Send</a>
                                        </td>
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
 