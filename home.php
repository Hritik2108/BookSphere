<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}
$sql = "SELECT *FROM files";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   
   <link rel="stylesheet" href="https://unpkg.com/sheryjs/dist/Shery.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Explore Worlds on Every Page, Your Online Book Haven!</h3>
      <p>Dive into captivating stories at our online book haven, where every page unfolds new worlds!</p>
      <a href="about.php" class="white-btn">discover more</a>
   </div>

</section>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 8") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
               
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price"><?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
      <input type="submit" value="Download PDF" name="Download PDF" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/book23.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Welcome to our literary haven, where words come alive and stories unfold. At BookSphere, we celebrate the magic of books. Immerse yourself in a world of diverse genres, from gripping mysteries to heartwarming tales. Our curated collection promises literary adventures for every reader. </p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>Can't Find the Book You Need?</h3>
      <p>Send A Message to us, And We'll Arrange it For You</p>
      <a href="contact.php" class="white-btn">contact us</a>
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