<?php include('partials/menu.php'); ?>
          <!--Menu content section-->
          <div class="main-content">
                <div class="wrapper">
                    <h2>Add Admin</h2><br><br>

          

                    <form action="" method="POST">
                        <table class ="tbl-30">
                            <tr>
                            <td>Full Name:</td> 
                            <td><input type="text" name="full-name" placeholder="Enter your name"></td> 
                            </tr>

                            <tr>
                            <td>Username:</td> 
                            <td><input type="text" name="username" placeholder="Enter your username"></td> 
                            </tr>

                            <tr>
                            <td>Password:</td> 
                            <td><input type="password" name="password" placeholder="Enter your password"></td> 
                            </tr>

                            <tr>
                            <td colspan="2"><input type="submit" name="submit" value="Add Admin" class="btn-secondary"></td> 
                            
                            </tr>


                        </table>

                    </form>
                    
                </div>
              </div>
              <!--Menu content section-->




          
<?php
//process the value from form and save it in database
//Check whether the submit button is clicked or not

if(isset($_POST['submit']))
{
    //button Clicked
    //echo "Button Clicked";

    //Get the values from form

 $full_name = $_POST['full-name'];
 $username = $_POST['username'];
 $password = md5($_POST['password']);

 //sql query to save data to database

 $sql = "INSERT INTO tbl_admin SET
    full_name='$full_name',
    username='$username',
    password= '$password'
    ";

   $res = mysqli_query($conn, $sql);

   //check the data is inserted
   if($res==TRUE)
   {
        echo "Admin Add Successfully";
        header('location:http://localhost/user/admin/manage-admin.php');
        
   }
   else
   {
        echo "Faile to Add Admin";

        
   }

}
?>
<?php include('partials/footor.php'); ?>