<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   
</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="portfolio">

   <h1 class="heading">our portfolio</h1>

   <div class="portfolio-container">

      <a href="image2.jpg" class="box">
         <div class="image">
            <img src="BeFunky-collage_(4).jpg" alt="">
         </div>
         <h3>wedding ceremony</h3>
      </a>

      <a href="Pastel-01-F5-Weddings.jpg" class="box">
         <div class="image">
            <img src="daytime-wedding-decoration-ideas.jpg" alt="">
            
         </div>
         <h3>Decoration</h3>
      </a>

      <a href="2c343e226bc10649bd775e4cb7d3f61f.jpg" class="box">
         <div class="image">
            <img src="1624431487732-1019x1024.jpg" alt="">
         </div>
         <h3>Halid ceremony</h3>
      </a>

      <a href="132191507_737298956897644_7683191170449913532_n.jpg" class="box">
         <div class="image">
            <img src="images/port-img-4.jpg" alt="">
         </div>
         <h3>Dinning</h3>
      </a>

      <a href="d1855e1b32a611e97e1a33b5baae6dd6.jpg" class="box">
         <div class="image">
            <img src="shades-photography.JPG" alt="">
         </div>
         <h3>Sangeet ceremony</h3>
      </a>

      <a href="1548093400_19.jpg" class="box">
         <div class="image">
            <img src="images/port-img-6.jpg" alt="">
         </div>
         <h3>Engagement ceremony</h3>
      </a>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

   lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>

</body>
</html>