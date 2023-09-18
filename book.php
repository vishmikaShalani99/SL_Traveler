<?php include('partials-front/menu.php');
?>
<head><title>book_SL</title></head>
<div class="heading" style="background:url(images/booknow2.jpg) no-repeat">
    <h1>book now</h1>
</div>

<!--booking start -->
<section class="booking">
    <h1 class="heading-title"><br><br>book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form" name="form1" onsubmit="return submitvalue()">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name" required="required">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone" required="required" id="phone">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="text" placeholder="enter your email" name="email" required="required">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>arrival date :</span>
                <input type="date"  name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving date :</span>
                <input type="date"  name="leaving">
            </div>
            <div class="inputBox">
                <span>whare to :</span>
                <input type="text" placeholder="Enter your destrination or package name " name="location" required="required">
            </div>
            <div class="inputBox">
                <span>Select adults:</span>
                <select name="adults">
                <option value="No adults">Select Adults</option>
                <option value="2Adult">1 Adult</option>
                <option value="2Adult">2 Adults</option>
                <option value="3Adult">3 Adults</option>
                <option value="4Adult">4 Adults</option>
                <option value="5Adult">5 Adults</option>
                <option value="6Adult">6 Adults</option>
                <option value="7Adult">7 Adults</option>
                <option value="8Adult">8 Adults</option>
                <option value="9Adult">9 Adults</option>
                <option value="10Adult">10 Adults</option>
                <option value="more">more than 10 Adults</option>
                </select>

            </div>
            <div class="inputBox">
                <span>Select kids:</span>
                <select name="kids">
                <option value="No kids">Select kids</option>
                <option value="2kids">1 kids</option>
                <option value="2kids">2 kids</option>
                <option value="3kids">3 kids</option>
                <option value="4kids">4 kids</option>
                <option value="5kids">5 kids</option>
                <option value="6kids">6 kids</option>
                <option value="7kids">7 kids</option>
                <option value="8kids">8 kids</option>
                <option value="9kids">9 kids</option>
                <option value="10kids">10 kids</option>
                <option value="more">more than 10 kids</option>
                </select>
            </div>
            <div class="inputBox" required="required">
                <span>status :</span>
                <select name="status">
                <option value="no select status">Select option</option>
                <option value="Confirmed">Confirmed</option>
                <option value="Need Itinerary">Need Itinerary</option>
                <option value="Pending">Pending</option>
                <option value="Later Sometime">Later Sometime</option>
                <option value="Just checking price">Just checking price</option>
                </select>
            </div>
        </div>
           <br><br> <input type="submit" value="Book Now" class="btn" name="send" >
    </form>
   
</section>
<!--booking end  -->

<script src="validation.js"></script>

<?php include('partials-front/footer.php');
?>
