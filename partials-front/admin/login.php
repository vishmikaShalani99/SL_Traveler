<?php include('../config/constant.php'); ?>


<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="admin2.css">
    </head>
    <body>
        <div class="login">
            <h1>login<br><br></h1>
            
            <form action="" method="POST">
                       

                            Username:<br>
                            <input type="text" name="username" placeholder="Enter your username"><br><br></td> 
                            

                            Password:<br>
                            <input type="password" name="password" placeholder="Enter your password"><br><br><br>
                            
                            <td colspan="2"><input type="submit" name="submit" value="login" class="btn-primary2"><br><br> 
                            
                            <p>~~SL Travelers~~</p>

                    </form>
                    
          
        </div>
        
    </body>
</html>

<?php
        if(isset($_POST['submit'])){
            $username =$_POST['username'];
             $password=md5($_POST['password']);

             $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";


             $res = mysqli_query($conn, $sql);
            
            //echo "Number of rows: " . $num_rows;

             $count = mysqli_num_rows($res);

       

             if($count==1){
                echo "Login Success";
                header('location:http://localhost/user/admin/index.php');
                
             }else{
                
                echo "Yor password or username did not match.";
                
             }
        }
?>