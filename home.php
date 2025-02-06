<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
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
        <a href="book.php">book</a>
        
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

 </section>

<!-- header section ends-->

<!--home section starts-->

<section class="home">

    <div class=" swiper home-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(pic-1.jpg)no-repeat">
            <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel around the world</h3>
            <a href="package.php" class="btn">discover more</a>
         </div>
        </div>

        
        <div class="swiper-slide slide" style="background:url(pic-2.jpg)no-repeat">
            <div class="content">
            <span>explore, discover, travel</span>
            <h3>discover the new places</h3>
            <a href="package.php" class="btn">discover more</a>
         </div>
        </div>

        
        <div class="swiper-slide slide" style="background:url(pic-3.jpg)no-repeat">
            <div class="content">
            <span>explore, discover, travel</span>
            <h3>make your tour worth while</h3>
            <a href="package.php" class="btn">discover more</a>
         </div>
        </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    </div>

</section>


<!--home section endss-->



<!-- services section starts -->

<section class="services">
    <h1 class="heading-title">our services</h1>

    <div class="box-container">

        <div class="box">
            <img src="adventurer.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="tour-guide.png" alt="">
            <h3>tour guide</h3>
        </div>  
        
        <div class="box">
            <img src="trekking.png" alt="">
            <h3>trekking</h3>
        </div>  

        <div class="box">
            <img src="bonfire.png" alt="">
            <h3>Foods</h3>
        </div>  

        <div class="box">
            <img src="road.png" alt="">
            <h3>Transportation</h3>
        </div>  

        <div class="box">
            <img src="camp.png" alt="">
            <h3>Camping</h3>
        </div>  

</div>
</section>



<!-- services section endss -->



<!-- home about section starts  -->

<section class="home-about">
    <div class="image">
        <img src="about_smaller.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>"Discover unforgettable journeys with us! We specialize in personalized travel experiences, offering curated tours, unique destinations, and seamless planning to make every adventure memorable and stress-free. Start exploring today!"</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>

<!-- home about section endss  -->

<!-- home package section starts -->

<section class="home-packages">

<h1 class="heading-title">our packages</h1>

<div class="box-container">

<div class="box">
    <div class="image">
        <img src="tajmahal.jpg" alt="">
    </div>
    <div class="content">
        <h3>Agra</h3>
        <p>"Taj Mahal: Iconic symbol of love and architectural brilliance."</p>
        <a href="book.php" class="btn">Rs 2000</a>
    </div>
</div>


<div class="box">
    <div class="image">
        <img src="rishikesh.jpg" alt="">
    </div>
    <div class="content">
        <h3>Rishikesh</h3>
        <p>"Rishikesh: Spiritual haven for yoga, meditation, and adventure seekers."</p>
        <a href="book.php" class="btn">Rs 5000</a>
    </div>
</div>

<div class="box">
    <div class="image">
        <img src="gateway-of-india.jpg" alt="">
    </div>
    <div class="content">
        <h3>Mumbai</h3>
        <p>"Mumbai: Vibrant city known for culture, finance, and Bollywood."</p>
        <a href="book.php" class="btn">Rs 15000</a>
    </div>
</div>

</div>

<div class="load-more"> <a href="package.php" class="btn">load more</a></div>

</section>



<!-- home package section ends -->

<!-- home offer section starts -->

<section class="home-offer">
    <div class="content">
        <h3>upto 20% off</h3>
        <p>Give us chance to serve you best ! </p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>





<!-- home offer section ends --> 



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
       <a href="directions.php"> <i class="fas fa-angle-right"></i>directions</a>
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