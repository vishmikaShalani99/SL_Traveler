<?php include('partials/menu.php'); ?>
          <!--Menu content section-->
          <div class="main-content">
                <div class="wrapper">
                    <h2>Add Destination</h2><br><br>

    

                    <form action="" method="POST" enctype="multipart/form-data">
                        <table class ="tbl-30">
                            <tr>
                            <td>Title:</td> 
                            <td><input type="text" name="title" placeholder="Destination title"></td> 
                            </tr>

                            <tr>
                            <td>Image:</td> 
                            <td><input type="file" name="image" ></td> 
                            </tr>

                            <tr>
                            <td>Featured</td> 
                            <td><input type="radio" name="featured" value="Yes" >Yes
                            <input type="radio" name="featured" value="No" >No</td> 
                            </tr>

                            <tr>
                            <td>Active:</td> 
                            <td><input type="radio" name="active" value="Yes" >Yes
                            <input type="radio" name="active" value="No" >No</td> 
                            </tr>

                            <tr>
                            <td colspan="2"><input type="submit" name="submit" value="Add Destination" class="btn-secondary"></td> 
                            
                            </tr>


                        </table>

                    </form>
                </div>
          </div>
          <?php
            if(isset($_POST['submit'])){
                //echo "Button Clicked";

                $title = $_POST['title'];

                if(isset($_POST['featured'])){
                    $featured =$_POST['featured'];
                }else{
                    $featured ="No";
                }

                if(isset($_POST['active'])){
                    $active =$_POST['active'];
                }else{
                    $active ="No";
                }
                //print_r($_FILES['image']);

                //die();
                if(isset($_FILES['image']['name'])){
                    $image_name =$_FILES['image']['name'];

                    $ext = end(explode('.', $image_name));

                    $image_name="Destination_".rand(000,999).'.'.$ext;

                    $source_path =$_FILES['image']['tmp_name'];
                    $destination_path="../images/Destination/".$image_name;
                

                    $upload = move_uploaded_file($source_path, $destination_path);

                    if($upload==false){
                        echo "Failed to upload image";
                        die();
                    }
                }else{
                    $image_name="";
                }

                $sql="INSERT INTO tbl_destination SET
                    title='$title',
                    image_name='$image_name',
                    featured='$featured',
                    active='$active'
                    ";

                $res = mysqli_query($conn, $sql);

                if($res==true)
            {
                echo "Destination added successfully";
                header('location:http://localhost/user/admin/manage-destination.php');
            }else{

            }

            }

          ?>

        <?php include('partials/footor.php'); ?>