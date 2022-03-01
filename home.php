<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

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

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(Indian-Traditions39-Portraits-37.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <p>FIND YOUR IDEAL WEDDING SPACE.
                  Thousand of People have their wedding venue up for grab. Dont miss the chance to grab your dream wedding plan.
               </p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(wedding-photography-couple-shoot.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <p>FIND YOUR IDEAL WEDDING SPACE.
                  Thousand of People have their wedding venue up for grab. Dont miss the chance to grab your dream wedding plan.</p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(smita-nilesh-35.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <p>FIND YOUR IDEAL WEDDING SPACE.
                  Thousand of People have their wedding venue up for grab. Dont miss the chance to grab your dream wedding plan.</p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="indian-bridal-wear-sabyasachi-red-lehenga.jpg" alt="">
            <div class="content">
               <h3>photography</h3>
               <p>We take photos of all the wedding. Full HD photo wwill be taken.</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="sagarika_zaheer.jpg" alt="">
            <div class="content">
               <h3>wedding registory</h3>
               <p>We make sure the our clients do'nt have to woorry about anything. So we also providing with wedding registory.</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="r10_2x_indian-wedding-guest-dresses-ambi-multimedia-lead-image.jpg" alt="">
            <div class="content">
               <h3>guest list</h3>
               <p>We also prepare the guest list</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="white-wedding-cake-orange-flowers-decorated-58453445.jpg" alt="">
            <div class="content">
               <h3>wedding cake</h3>
               <p>A beautiful wedding cake is also provided.</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="kanyadaan-ritual.jpg" alt="">
            <div class="content">
               <h3>wedding ceremony</h3>
               <p>We assure that all the ceremony and rituals are done as per the requirement.</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="depositphotos_39486987-stock-photo-indoors-wedding-reception-venue-with.jpg" alt="">
            <div class="content">
               <h3>fine dining</h3>
               <p>A lavish dinning hall is present , so that the guest can have a perfect and delicious dinner.</p>
               <a href="about.php" class="btn">about us</a>
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