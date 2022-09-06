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

 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   
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
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>While free shipping is great, 31% of respondents pick Goods Grabber because it is a “one stop shop.” Consumers know they can see almost every possible purchase option in one place, and they can narrow down the list of choices by scrolling through the product reviews</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p>The shopping app for the most part has a smooth, sublime operational niche that most other shopping Apps don't have! It is certainly in the top of the list of all good shopping Apps</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Akil Raihan Iftee</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.jpg" alt="">
         <p>Goods Grabber is faithful. Through the pandemic this was sometimes the fastest and easiest (and even the only way) to get essential and nonessential items.It helps me lot to buy goods.</p>
         
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mominur Rahman Sourov</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpg" alt="">
         <p>Shopping with Goods Grabber is fine. I enjoy it and the Prime feature helps a lot. Also fairly easy to navigate. I would have given one or two more stars if the list feature worked better.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Taqiul Islam</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.jpg" alt="">
         <p> I don't know what you guys did, but when adding an item to a list it no longer lets me edit so that I can add to certain lists. So I add a camera, for example, to a shoes list and no ability to change.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nafiul Alam</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.jpg" alt="">
         <p> I use the app more than via my PC, and use it frequently throughout the day. As others have stated, Lists have become a pain in the neck over the past several months, if not longer.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Avishek Roy</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.jpg" alt="">
         <p>I like the  app,  but find it updated so often it can be confusing. Most difficult to find is a way to  reach  Customer Service,  which is problematic. It make shoping easy</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Uday Roy</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate Seller</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/seller-1.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/shahid.hasan.7528610" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sahid Hasan</h3>
      </div>

      <div class="box">
         <img src="images/seller-2.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/kaziabrar.faiyaz.3" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Kazi Abrar Faiyaz</h3>
      </div>

      <div class="box">
         <img src="images/seller-3.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/ATMShifat" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Abu Tahir Shifat</h3>
      </div>

      <div class="box">
         <img src="images/seller-4.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/sadman.sakib.7169" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sadman Sakib</h3>
      </div>

      <div class="box">
         <img src="images/seller-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>shoumya Partho</h3>
      </div>

      <div class="box">
         <img src="images/seller-6.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/subol.roy.52056" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Subol Roy</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>


<script src="js/script.js"></script>

</body>
</html>