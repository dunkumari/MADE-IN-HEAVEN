<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>pricing</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="pricing">

   <h1 class="heading">our pricing</h1>

   <div class="box-container">

      <div class="box">
         <h3>basic plan</h3>
         <div class="price">$250/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> wedding ceromony</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>premium plan</h3>
         <div class="price">$650/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> wedding ceromony</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>ultimate plan</h3>
         <div class="price">$1250/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> wedding ceromony</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="heading">happy clients</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <h3>john </h3>
            <p>It was a great experience. Decoration was great.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <h3>Reema Singh</h3>
            <p>Decoration was amazing . All the works were done on time , food was very tasty.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <h3>Rohit singh</h3>
            <p>Had a great experience , had made my wedding very memorable.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="far fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <h3>Shubhi singh</h3>
            <p>A great experience and enjoyed a lots .The work was amazing.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <h3>Sunny singh</h3>
            <p>Had a great experience , had made my wedding very memorable.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="far fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <h3>Anjali niboriya</h3>
            <p>It was a great experience. Decoration was great.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>