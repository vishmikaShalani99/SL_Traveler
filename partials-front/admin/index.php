<?php include('partials/menu.php');
 ?>

              <!--Menu content section-->
              <div class="main-content">
                <div class="wrapper">
                    <h2>Dashboard</h2>

                    <div class="col-3 text">
                    <?php
                        $sql2 = "SELECT * FROM tbl_admin";

                        $res2 = mysqli_query($conn, $sql2);

                        $count2 = mysqli_num_rows($res2);
                        ?>
                        <h1><?php echo $count2?></h1><br>
                        Admin
                    </div>
                    
                    <div class="col-3 text">
                        <?php
                        $sql = "SELECT * FROM tbl_destination";

                        $res = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($res);
                        ?>
                        <h1><?php echo $count?></h1><br>
                        Destinations
                    </div>
                    <div class="col-3 text">
                    <?php
                        $sql3 = "SELECT * FROM tbl_book ";

                        $res3 = mysqli_query($conn, $sql3);

                        $count3 = mysqli_num_rows($res3);
                        ?>
                        <h1><?php echo $count3?></h1><br>
                        Available Bookings
                    </div>
                    
                    <div class="col-3 text">
                    <?php
                        
                        $sql4 = "SELECT *FROM tbl_destination";
                        $res4 = mysqli_query($conn, $sql4);
                         $count4 = mysqli_num_rows($res4);
                         if($count>0)
                         {
                             while($rows=mysqli_fetch_assoc($res))
                             {
                                 $id=$rows['id'];
                             }}
                        ?>
                        <h1><?php echo $id?></h1><br>
                        Total Bookings
                    </div>
                    <div class="clearfix"></div>
                    
                </div>
              </div>
              <!--Menu content section-->

<?php include('partials/footor.php'); ?>
