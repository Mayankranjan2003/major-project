<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- header section starts -->

 <section class="header">

    <a href="home.php" class="logo">guide.vista</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="home2.php">Login</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

 </section>

<!-- header section ends-->


 <div class="heading" style="background:url(pic-5.jpg)no-repeat">
    <h1>book now </h1>
 </div>

 <!-- booking section starts -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

   <div class="flex">
    <div class="inputBox">
       <span>name :</span>
       <input type="text" placeholder="enter your name" name="name">
  </div>
  
    <div class="inputBox">
       <span>email :</span>
       <input type="email" placeholder="enter your email" name="email">
  </div>

    <div class="inputBox">
       <span>phone :</span>
       <input type="number" placeholder="enter your phone no." name="phone">
  </div>

    <div class="inputBox">
       <span>address :</span>
       <input type="text" placeholder="enter your address" name="address">
  </div>

  <div class="inputBox">
       <span>where to :</span>
       <input type="text" placeholder="place you want to visit" name="location">
  </div>

  <div class="inputBox">
       <span>how many :</span>
       <input type="number" placeholder="no. of guests" name="guests">
  </div>

  <div class="inputBox">
       <span>budget :</span>
       <input type="number" placeholder="enter your budget" name="budget">
  </div>

  <div class="inputBox">
       <span>arrival :</span>
       <input type="date"  name="arrival">
  </div>

  <div class="inputBox">
       <span>departure :</span>
       <input type="date"  name="departure">
  </div>
</div>

<input type="submit" value="submit" class="btn" name="send">


</form>

</section>



 <!-- booking section ends --> 











<!-- footer section starts -->

<section class="footer">

  <div class="box-container">

    <div class="box">
        <h3>quick links</h3>
       <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
       <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
       <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
       <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
    </div>

    <div class="box">
        <h3>extra links</h3>
       <a href="directions.php"> <i class="fas fa-angle-right"></i>Directions</a>
       <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
       <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
       <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
    </div>

    
    <div class="box">
        <h3>contact info</h3>
       <a href="tel:+1234567890"> <i class="fas fa-phone"></i>9570699610</a>
       <a href="tel:+1234567890"> <i class="fas fa-phone"></i>7752048858</a>
       <a href="mailto:your.email@gmail.com"> <i class="fas fa-envelope"></i>mayankranjan72222gmail.com</a>
       <a href="https://www.google.com/maps?q=greaternoida_knowledge-park-3_uttar_pradesh "> <i class="fas fa-map"></i>greater noida, india - 201310</a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fas fa-facebook"></i>facebook</a>
        <a href="#"> <i class="fas fa-twitter"></i>Twitter</a>
        <a href="#"> <i class="fas fa-instagram"></i>Instagram</a>
        <a href="#"> <i class="fas fa-linkedin"></i>linked</a>
    </div>

   </div>

<div class="credit"> Guide <span>.vista</span> | all rights reserved!</div>

</section>




<!-- footer section ends -->






















<!-- swiper js file -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- js file link -->
<script src="script.js"></script>
    
</body>
</html>