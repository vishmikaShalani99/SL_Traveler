<?php include('partials-front/menu.php');
?>
<head><title>packages_SL</title></head>

<div class="heading" style="background:url(images/newpac.jpg) no-repeat">
    <h1>packages</h1>
</div>

 <!-- Destination Start -->
 <section>
<h1 class="reviews-title">Explore Top Destination</h1>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
            </div>
            <div class="row">
                

                <?php
                         $sql = "SELECT *FROM tbl_destination WHERE active='Yes' AND featured='Yes'" ;
                         $res = mysqli_query($conn, $sql);
                         $count = mysqli_num_rows($res);
 
                          if($count>0)
                             {
 
                                 
                                 while($rows=mysqli_fetch_assoc($res))
                                 {
                                     $id=$rows['id'];
                                     $title=$rows['title'];
                                     $image_name=$rows['image_name'];
                                    ?>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                             <div class="destination-item position-relative overflow-hidden mb-2">
                                                    <img class="img-fluid" src="http://localhost/user/images/Destination/<?php echo $image_name?>" alt="">
                                                      <a class="destination-overlay text-white text-decoration-none" href="">
                                                      <h2 class="text-white"><?php echo $title?></h2>
                            
                                                     </a>
                                            </div>
                                        </div>


                                    <?php
 
                                 }
                                }     
                ?>

            </div>
        </div>
    </div>
    </section>
    <!-- Destination Start -->

    <!--packages start  -->

<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">


        <div class="box">
            <div class="image">
                <img src="images/book.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>This is what holidays, travels, vacations are about. 
                    It is not really rest or even leisure we chase. We strain to renew our capacity to wonder, 
                    to shock ourselves into astonishment once again.<br><br><a href="book.php" class="btn">book now</a></p>
                    
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/safari.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Go on Safari</h3>
                <p>Going on safari is a given if you’re looking for adventure in Sri Lanka, Here, you’ll spot crocodiles, several species of birds, elephants, and—if you’re lucky—one of the evasive leopards. 
                <br><br><a href="book.php" class="btn">book now</a>
                </p>
           
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/surf.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Go Surfing</h3>
                <p>Sri Lanka has several great surfing spots, most of which span the country from the southwest to the southeast, and choosing the best area mostly depends on dry seasons.<br><br><a href="book.php" class="btn">book now</a></p>
                
            </div>
        </div>

    
    </div>
</section>
<!--packages end  -->

    <!-- Packages Start -->
    <section>
<h1 class="reviews-title">Special Tour Packages</h1>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-map-marker-alt "></i>  Nuwara Eliya</small>
                            <small class="m-0"><i class="fa fa-calendar-alt "></i>  3 Nights/4 Days</small>
                            <small class="m-0"><i class="fa fa-user "></i>  2 Person</small>
                            </div>
                            <a  class="h5 text-decoration-none" href="">01.Romantic Sri Lanka Honeymoon Packages</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star"></i>4.5 </h6>
                                    <h5 class="m-0">INR 16500/-</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="images/pa3.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-map-marker-alt "></i> Bentota Hills</small>
                            <small class="m-0"><i class="fa fa-calendar-alt "></i>  4 Nights/5 Days</small>
                            <small class="m-0"><i class="fa fa-user "></i>  4 Person</small>
                            </div>
                            <a  class="h5 text-decoration-none" href="">02.Magical Sri Lanka with Bentota Hills</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star"></i>5 </h6>
                                    <h5 class="m-0">INR 22750/-</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="images/Nuwaraeliya.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-map-marker-alt "></i> Nuwara Eliya</small>
                            <small class="m-0"><i class="fa fa-calendar-alt "></i>  6 Nights/7 Days</small>
                            <small class="m-0"><i class="fa fa-user "></i>  10 Person</small>
                            </div>
                            <a  class="h5 text-decoration-none" href="">03.Best of Nuwara Eliya Sri Lanka Holiday</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star"></i>4.5 </h6>
                                    <h5 class="m-0">INR 40500/-</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="images/l.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-map-marker-alt "></i> Yala National</small>
                            <small class="m-0"><i class="fa fa-calendar-alt "></i>  1 Days</small>
                            <small class="m-0"><i class="fa fa-user "></i>  2 Person</small>
                            </div>
                            <a  class="h5 text-decoration-none" href="">04.Spot Leopards on Safari</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star"></i>5 </h6>
                                    <h5 class="m-0">INR 20000/-</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="images/baloon.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-map-marker-alt "></i>  Sigiriya</small>
                            <small class="m-0"><i class="fa fa-calendar-alt "></i>  1 Days</small>
                            <small class="m-0"><i class="fa fa-user "></i>  1 Person</small>
                            </div>
                            <a  class="h5 text-decoration-none" href="">05.Experience Hot Air Ballooning</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star"></i>5 </h6>
                                    <h5 class="m-0">INR 30000/-</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="images/sa.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-map-marker-alt "></i>  Udawalawe National Park</small>
                            <small class="m-0"><i class="fa fa-calendar-alt "></i>  1 Days</small>
                            <small class="m-0"><i class="fa fa-user "></i>  10 Person</small>
                            </div>
                            <a  class="h5 text-decoration-none" href="">06.See Elephants Up Close and in the Wild</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star"></i>4.5 </h6>
                                    <h5 class="m-0">INR 12000/-</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Packages End -->


   


    <?php include('partials-front/footer.php');
?>
