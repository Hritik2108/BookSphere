<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
    
   <link rel="stylesheet" href="https://unpkg.com/sheryjs/dist/Shery.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about book.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to our literary haven, where words come alive and stories unfold. At BookSphere, we celebrate the magic of books. Immerse yourself in a world of diverse genres, from gripping mysteries to heartwarming tales. Our curated collection promises literary adventures for every reader. </p>
         <p> Whether you seek escapism or knowledge, [Website Name] is your gateway to a universe of boundless imagination. Join us on this literary journey, where each page invites you to explore, discover, and cherish the beauty of storytelling.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Excellent</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>great books</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Angella</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>very good collection</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shawn</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Excellent</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Pragati</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>easy to use UI</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nick</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Smooth shopping experience</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lisa</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/jk.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>JK Rowling</h3>
      </div>

      <div class="box">
         <img src="images/stephen king.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Stephen King</h3>
      </div>

      <div class="box">
         <img src="images/sidney sheldon.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sidney Sheldon</h3>
      </div>

      <div class="box">
         <img src="images/RLStine.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>RL Stine</h3>
      </div>

      <div class="box">
         <img src="images/akira toriyama.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Akira Toriyama</h3>
      </div>

      <div class="box">
         <img src="images/danielle steel.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Danielle Steel</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!--  Gsap is needed for Basic Effects -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<!-- Scroll Trigger is needed for Scroll Effects -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<!-- Three.js is needed for 3d Effects -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.155.0/three.min.js"></script>

<!-- ControlKit is needed for Debug Panel -->
<script src="https://cdn.jsdelivr.net/gh/automat/controlkit.js@master/bin/controlKit.min.js"></script>
<script  type="text/javascript"  src="https://unpkg.com/sheryjs/dist/Shery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js" integrity="sha256-odlNpseyKe/Yr2FVkKfof6CSj8+edbarxw5hDpqCGBE=" crossorigin="anonymous"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>