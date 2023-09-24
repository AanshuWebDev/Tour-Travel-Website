
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<!-- header section starts -->


<section class="header">

<a href="home.php" class="logo">travel.</a>
<nav class="navbar" style="font-size:2rem;">
<a href="Home.php">home</a>
<a href="about.php">about</a>
<a href="package.php">package</a>
<a href="book.php">book</a>
</nav>

 <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- header section ends -->

<div class="heading" style="background:url(book.jpg) no-repeat">
    <h1>Book Now</h1>
</div>

<!--booking section starts-->

<section class="booking">

<h1 class="heading-title">book your trip!</h1>

<form action="bookform.php" method="post" class="book-form">

<div class="flex">
    <div class="inputBox">
        <span>name:</span>
        <input type="text" placeholder="enter your name" name="name">
</div>
<div class="inputBox">
        <span>email:</span>
        <input type="email" placeholder="enter your email" name="email">
</div>
<div class="inputBox">
        <span>phone:</span>
        <input type="number" placeholder="enter your number" name="phone">
</div>
<div class="inputBox">
        <span>address:</span>
        <input type="text" placeholder="enter your address " name="address">
</div>
<div class="inputBox">
        <span>where to:</span>
        <input type="text" placeholder="place you want to visit "name="location">
</div>
<div class="inputBox">
        <span>how many:</span>
        <input type="number"placeholder="number of guests"name="guests">
</div>
<div class="inputBox">
        <span>arrivals:</span>
        <input type="date" name="arrivals">
</div>
<div class="inputBox">
        <span>leaving:</span>
        <input type="date" name="leaving">
</div>
</div>

<input type="submit" name="submit" value="submit" class="btn">
</form>
</section>


























<!--booking section starts-->







































<!-- footer section start -->

<section class="footer" style="background: url(footer.jpg);">

<div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
            <a href="Home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> About us</a>
            <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> Terms of use</a>
            </div>
            <div class="box">
                <h3>Contact Information</h3>
            <a href="#"><i class="fas fa-phone"></i> +91-70112-38959</a>
            <a href="#"><i class="fas fa-phone"></i> +91-70112-38959</a>
            <a href="#"><i class="fas fa-envelope"></i> uanshu987@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> Delhi,India-110094</a>
            </div>
            <div class="box">
                <h3>Follow us</h3>
            <a href="#"><i class="fas fa-facbook-f"></i>Facebook</a>
            <a href="#"><i class="fas fa-twitter"></i>twitter</a>
            <a href="#"><i class="fas fa-instagram"></i>instagram</a>
            <a href="#"><i class="fas fa-linkedin"></i>linkedin</a>
            </div>
</div>
            
  <div class="credit">Created by <span>Anshu Upadhyay</span>|All Rights Reserved!</div>  
     



</section>


<!-- footer section end -->


<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>



</body>
</html>