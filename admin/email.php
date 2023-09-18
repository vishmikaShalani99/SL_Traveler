<?php include('partials/menu.php'); ?>
          <!--Menu content section-->
          <div class="main-content">
                <div class="wrapper">
                    <h2>Send Email</h2><br><br>
                    <?php
                            $id = $_GET['id'];
                            $sql = "SELECT *FROM tbl_book WHERE id=$id";
                            $res = mysqli_query($conn, $sql);

                            if($res == true){
                                $count = mysqli_num_rows($res);

                                if($count>0)
                                {
                                        //echo "Admin Available";
                                        $rows=mysqli_fetch_assoc($res);
                                        $name=$rows['name'];
                                        $email=$rows['email'];
                                }else{
                                    header('location:http://localhost/user/admin/manage-admin.php');
                                }
                            }

                    ?>


                    <form action="mailto:<?php $email?>" method="POST" enctype="text/plain">
                        <table class ="tbl-30">
                            <tr>
                            <td>Full Name:</td> 
                            <td><input type="text" name="name" value="<?php echo $name ?>" size="30px"></td> 
                            </tr>

                            <tr>
                            <td>Username:</td> 
                            <td><input type="text" name="email" value ="<?php echo $email?>" size="30px"></td> 
                            </tr>

                            <tr>
                            <td>Content:</td> 
                            <td><textarea name="Content" id="content" cols="60" rows="10"></textarea></td> 
                            </tr>

                            <tr>
                            <td colspan="2"> <input type="hidden" name="id" value="<?php echo $id;?>">
                            <input type="submit" name="submit" value="Send Email" class="btn-secondary">
                            <a href="http://localhost/user/admin/delete-booking.php?id=<?php echo $id; ?>" class="btn-third">Delete booking</a></td> 
                            
                            </tr>


                        </table>

                    </form>
                    </div>
              </div>
              <!--Menu content section-->



              

<?php include('partials/footor.php'); ?>