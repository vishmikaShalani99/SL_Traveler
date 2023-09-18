<?php include('partials/menu.php'); ?>
          <!--Menu content section-->
          <div class="main-content">
                <div class="wrapper">
                    <h2>Add Guide</h2><br><br>

    

                    <form action="" method="POST" enctype="multipart/form-data">
                        <table class ="tbl-30">
                            <tr>
                            <td>Name:</td> 
                            <td><input type="text" name="guide_name" placeholder="Guide Name"></td> 
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
                            <td colspan="2"><input type="submit" name="submit" value="Add Guide" class="btn-secondary"></td> 
                            
                            </tr>


                        </table>

                    </form>
                </div>
          </div>
          <?php
            if(isset($_POST['submit'])){
                //echo "Button Clicked";

                $guide_name = $_POST['guide_name'];

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
                    $image =$_FILES['image']['name'];

                    $ext = end(explode('.', $image));

                    $image="Destination_".rand(000,999).'.'.$ext;

                    $source_path =$_FILES['image']['tmp_name'];
                    $destination_path="../images/Destination/".$image;
                

                    $upload = move_uploaded_file($source_path, $destination_path);

                    if($upload==false){
                        echo "Failed to upload image";
                        die();
                    }
                }else{
                    $image="";
                }

                $sql="INSERT INTO tbl_guide SET
                    guide_name='$guide_name',
                    image ='$image',
                    featured='$featured',
                    active='$active'
                    ";

                $res = mysqli_query($conn, $sql);

                if($res==true)
            {
                echo "Guide added successfully";
                header('location:http://localhost/user/admin/Guide-management.php');
            }else{

            }

            }

          ?>

        <?php include('partials/footor.php'); ?>