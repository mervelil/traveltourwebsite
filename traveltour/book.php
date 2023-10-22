<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />


</head>
<body>

<section class ="header">
    <a href="home.php" class="logo">Travel.</a>
        <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<div class ="heading" style="background:url(images/pexels-andrea-piacquadio-774909.jpg) no-repeat">
     <h1>book now</h1>
</div>


<section class="booking">
    <h1 class="heading-title" >
        book your trip!
    </h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span> name:</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span> Email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span> Phone :</span>
                <input type="number" placeholder="enter your phone" name="phone">
            </div>
            <div class="inputBox">
                <span> Address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span> Where to:</span>
                <input type="text" placeholder=" place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span> Guests:</span>
                <input type="number" placeholder="Guest num" name="guests">
            </div>
            <div class="inputBox">
                <span> Arrivals: </span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span> Leaving: </span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name ="send">
    </form>
</section>






<section class="footer">
   <div class="box-container">
    <div class="box">
        <h3>Quick Links</h3>
      
        <a href="home.php"> <i class="fas fa-angle-right" aria-hidden="true"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right" aria-hidden="true"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right" aria-hidden="true"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right" aria-hidden="true"></i>book</a>
    </div>

    <div class="box">
        <h3>Extra Links</h3>
        <a href="#"> <i class="fas fa-angle-right" aria-hidden="true"></i>ask question</a>
        <a href="#"> <i class="fas fa-angle-right" aria-hidden="true"></i>about us</a>
        <a href="#"> <i class="fas fa-angle-right" aria-hidden="true"></i>privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right" aria-hidden="true"></i>terms of use</a>
    </div>
    <div class="box">
        <h3>Contact Info</h3>
        <a href="#"> <i class="fas fa-phone" aria-hidden="true"></i>+123-456-3488</a>
        <a href="#"> <i class="fas fa-phone" aria-hidden="true"></i>+122-412-3488</a>
        <a href="#"> <i class="fas fa-envelope" aria-hidden="true"></i>lili@gmail.com</a>
        <a href="#"> <i class="fas fa-map" aria-hidden="true"></i>Klaipeda,Lithuania-400101</a>
      
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook" aria-hidden="true"></i>facebook</a>
        <a href="#"> <i class="fab fa-twitter" aria-hidden="true"></i>twitter</a>
        <a href="#"> <i class="fab fa-instagram" aria-hidden="true"></i>instagram</a>
        <a href="#"> <i class="fab fa-linkedin" aria-hidden="true"></i>linkedin</a>
    </div>
   </div> 
   <div class="credit">created by <span>Merve CELIK</span>| all rights reserved</div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>