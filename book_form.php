<?php

  $connection = mysqli_connect('localhost','root','','book_db');

  if(isset($_POST['send'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $location = $_POST['location'];
     $guests = $_POST['guests'];
     $budget = $_POST['budget'];
     $arrival = $_POST['arrival'];
     $departure = $_POST['departure'];

     $request =  " insert into book_form(name, email, phone, address, location, guests, budget, arrival, departure) values
     ('$name','$email','$phone','$address','$location','$guests','$budget','$arrival','$departure')";

     mysqli_query($connection, $request);

     header('location:book.php');
  } else{
       echo 'something went wrong try again';
  }

  ?>