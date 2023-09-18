<?php include('partials-front/menu.php');
?>
<head><title>guide_SL</title></head>


 <!-- Team Start -->
 <section>
 <h1 class="reviews-title">Our Travel Guides</h1>
 <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="row">
            <?php
                         $sql = "SELECT *FROM tbl_guide WHERE active='Yes' AND featured='Yes'" ;
                         $res = mysqli_query($conn, $sql);
                         $count = mysqli_num_rows($res);
 
                          if($count>0)
                             {
 
                                 
                                 while($rows=mysqli_fetch_assoc($res))
                                 {
                                     $id=$rows['id'];
                                     $guide_name=$rows['guide_name'];
                                     $image=$rows['image'];
                                    ?>
                                           <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                                                <div class="team-item bg-white mb-4">
                                                     <div class="team-img position-relative overflow-hidden">
                                                        <img class="img-fluid w-100" src="http://localhost/user/images/Destination/<?php echo $image?>" alt="">
                            
                                                     </div>
                                                 <div class="text-center py-4">
                                                <h5 class="text-truncate"><?php echo $guide_name?></h5>
                                               </div>
                                            </div>
                                        </div>


                                    <?php
 
                                 }
                                }     
                ?>
             
                </div>
                
               
</section>
    <!-- Team End -->
    <?php include('partials-front/footer.php');
?>
