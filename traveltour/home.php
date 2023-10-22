<?php 
session_start();
// include 'about.php';
// include 'book.php';
// include 'package.php';
if(isset($_SESSION['username'])&& isset($_SESSION['avatar'])) {
    $username=$_SESSION['username'];
    $avatar=$_SESSION['avatar'];
}else{
    $username="merve";
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
<section class="home">
    <div class="swiper home-slider">
       <div class="swiper-wrapper">
        <div class="swiper-slide slide" style="background:url(images/pexels-taryn-elliott-5405596.jpg ) no-repeat">
            <div class="content">
                <span>explore,discover,travel</span>
                <h3>travel around the world</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/pexels-valentin-antonucci-691637.jpg ) no-repeat">
            <div class="content">
                <span>explore,discover,travel</span>
                <h3>travel around the new places</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>
        
        <div class="swiper-slide slide" style="background:url(images/pexels-taryn-elliott-3889742.jpg ) no-repeat">
            <div class="content">
                <span>explore,discover,travel</span>
                <h3>make your tour worthwhile</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

       </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>
</section>

<section class="services">
    <h1 class="heading-title">
        our services
    </h1>
    <div class="box-container">
        <div class="box">
       
        
        <img src="images/map.png" alt="">
        <h3>adventure</h3>
        </div>
        <div class="box">
        <img src="images/tour.png" alt="">
        <h3>tour guide</h3>
        </div>
        <div class="box">
        <img src="images/fire.png" alt="">
        <h3>camp fire</h3>
        </div>
        <div class="box">
        <img src="images/jeep.png" alt="">
        <h3>off road</h3>
        </div>
        <div class="box">
        <img src="images/tent.png" alt="">
        <h3>camping</h3>
        </div>
    </div>
 

</section>

<section class="home-about">
    <div class="image">
        <img src="images/pexels-spencer-davis-4356144.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati corrupti qui quas similique consectetur maiores dignissimos fuga, ipsa quibusdam facilis. Iusto, nesciunt consequuntur! Excepturi perspiciatis culpa error laudantium libero eos.</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>
<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/travel-concept-with-landmarks.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, sint!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="images/medium-shot-couple-holding-map.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, sint!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/pexels-leah-kelley-3935702.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, sint!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>

    <div class="load-more">
        <a href="package.php"class="btn">load more</a>
    </div>
</section>

   <section class="home-offer">
        <div class="content">
            <h3>Up to %50 off</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi repellendus est mollitia quo ullam numquam quis porro qui blanditiis beatae sint unde deleniti eaque laudantium facilis placeat, incidunt iusto perspiciatis excepturi ad nobis. Ea, possimus odit.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
   </section>

   <section class="about">
      <div class="image">
            <img src="images/pexels-stefan-stefancik-127905.jpg" alt="">
      </div>
    <div class="content">
        <h3>why choose us?</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni facere quas officiis officia. Tempore sit veritatis iste esse cumque laboriosam!</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, velit! Recusandae optio dolore ratione corporis cum, nesciunt voluptatibus iste vero, fugiat architecto modi sequi laborum nam tempora consequuntur error repellendus.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span> 24/7 guide services</span>
            </div>
        </div>
    </div>

   </section>
   <section class="reviews">
     <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt aperiam soluta non iste hic nulla ex, officia obcaecati, porro voluptatibus ducimus blanditiis magni pariatur a corrupti assumenda error quod repellendus!</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pexels-arthouse-studio-4413762.jpg" alt="">
            </div>

            <div class=" swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt aperiam soluta non iste hic nulla ex, officia obcaecati, porro voluptatibus ducimus blanditiis magni pariatur a corrupti assumenda error quod repellendus!</p>
                <h3>joenna deon</h3>
                <span>traveler</span>
                <img src="images/pexels-andrea-piacquadio-774909.jpg" alt="">
            </div>

            <div class=" swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt aperiam soluta non iste hic nulla ex, officia obcaecati, porro voluptatibus ducimus blanditiis magni pariatur a corrupti assumenda error quod repellendus!</p>
                <h3>Alexa odeo</h3>
                <span>traveler</span>
                <img src="images/pexels-rodnae-productions-4918606.jpg" alt="">
            </div>
        </div>
     </div>
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
<script src="js/script.js?<?php echo time(); ?>"> </script>

</body>
</html>