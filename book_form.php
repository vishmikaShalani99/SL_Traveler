<?php

    $connection = mysqli_connect('localhost','root','','travel_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $arrival_date = $_POST['arrivals'];
    $leaving_date = $_POST['leaving'];
    $destination= $_POST['location'];
    $adult = $_POST['adults'];
    $kids = $_POST['kids'];
    $status = $_POST['status'];

    $request =" insert into tbl_book(name,	phone,	email,	adress,	arrival_date,	leaving_date,	destination,	adult,	kids,	status	) values ('$name', '$phone', '$email', '$address',  '$arrival_date', '$leaving_date', '$destination', '$adult', '$kids', '$status' )";
    
    mysqli_query($connection, $request);

    
    header('location:book.php');
}else {
    echo 'something went wrong try again';
}
?>




