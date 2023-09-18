<?php include('partials/menu.php'); ?>
          <!--Menu content section-->
          <div class="main-content">
                <div class="wrapper">
                    <h2>Update Destination</h2><br><br>

                    <?php

                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $sql = "SELECT *FROM tbl_destination WHERE id=$id";
                            $res = mysqli_query($conn, $sql);


                            $count = mysqli_num_rows($res);

                                if($count==1)
                                {
                                        //echo "Admin Available";
                                        $rows=mysqli_fetch_assoc($res);
                                        $title=$rows['title'];
                                        $current_image=$rows['image_name'];
                                        $featured=$rows['featured'];
                                        $active=$rows['active'];
                                }else{
                                    echo "No Destination found";
                                }
                                
                                }else{
                                    header('location:http://localhost/user/admin/manage-destination.php');
                                }
                            

                    ?>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <table class ="tbl-30">
                            <tr>
                            <td>Title:</td> 
                            <td><input type="text" name="title" value="<?php echo $title?>"></td> 
                            </tr>

                            <tr>
                            <td>Current Image:</td> 
                            <td><?php
                                if($current_image != ""){
                                    
                                    ?>
                                    <img src="http://localhost/user/images/Destination/<?php echo $current_image?>"width="100px" height="70px">
                                    <?php
                                }else{
                                    echo "Image Not added";
                                }
                                ?>
                            </td> 
                            </tr>
                            <tr>
                            <td>New Image:</td> 
                            <td><input type="file" name="image" ></td> 
                            </tr>

                            <tr>
                            <td>Featured</td> 
                            <td><input <?php if($featured=="Yes"){echo "Checked";}?> type="radio" name="featured" value="Yes" >Yes
                            <input <?php if($featured=="No"){echo "Checked";}?> type="radio" name="featured" value="No" >No</td> 
                            </tr>

                            <tr>
                            <td>Active:</td> 
                            <td><input <?php if($active=="Yes"){echo "Checked";}?> type="radio" name="active" value="Yes" >Yes
                            <input <?php if($active=="No"){echo "Checked";}?> type="radio" name="active" value="No">No</td> 
                            </tr>

                            <tr>
                            <td colspan="2">
                            <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <input type="submit" name="submit" value="Update Destination" class="btn-secondary"></td> 
                            
                            </tr>


                        </table>

                    </form>
                </div>
          </div>

          <?php
                if(isset($_POST['submit'])){
                    //echo "Clicked";
                    $id = $_POST['id'];
                    $title = $_POST['title'];
                    $current_image = $_POST['current_image'];
                    $featured=$_POST['featured'];
                    $active=$_POST['active'];


                    if(isset($_FILES['image']['name']))
                    {
                        $image_name =$_FILES['image']['name'];
                        if($image_name!=""){

                            $ext = end(explode('.', $image_name));

                            $image_name="Destination_".rand(000,999).'.'.$ext;
                            $source_path =$_FILES['image']['tmp_name'];
                            $destination_path="../images/Destination/".$image_name;
                            $upload = move_uploaded_file($source_path, $destination_path);

                           /* if($upload==false){
                                echo "Failed to upload image";
                                die();
                            }
                            $remove_path = "../images/Destination".$current_image;

                            $remove = unlink($remove_path);

                            if($remove==false)
                            {
                                echo"Failed to remove current image";
                                die();
                            }*/


                        }
                        else
                        {
                            $image_name=$current_image;
                        }

                    }
                    else
                    {
                        $image_name=$current_image;

                    }

                    $sql2 = "UPDATE tbl_destination SET 
                    title ='$title',
                    image_name='$image_name',
                    featured = '$featured',
                    active = '$active'
                    WHERE id ='$id'
                    ";

                    $res2 = mysqli_query($conn, $sql2);
                    if($res2 == true)
                    {
                        echo" Destination updated successfully";
                        header('location:http://localhost/user/admin/manage-destination.php');
                       
                    }else{
                        echo"Failed to update Destination";
                    }
                }
            
          ?>
          <?php include('partials/footor.php'); ?>