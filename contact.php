
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

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

<section class="contact">

   <h1 class="heading">contact us</h1>

   <form action="" method="post">

      <div class="flex">

         <div class="inputBox">
            <span>YOUR NAME</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>

         <div class="inputBox">
            <span>YOUR EMAIL</span>
            <input type="email" placeholder="Enter your email" name="email" required>
         </div>

         <div class="inputBox">
            <span>YOUR NUMBER</span>
            <input type="number" placeholder="Enter your number" name="number" required>
         </div>

         <div class="inputBox">
            <span>CHOOSE PLAN</span>
            <select name="plan">
               <option value="basic">Basic plan</option>
               <option value="premium">Premium plan</option>
               <option value="ultimate">Ultimate plan</option>
            </select>
         </div>

         <div class="inputBox">
            <span>YOUR ADDRESS</span>            
            <textarea name="address" placeholder="Enter your address" required cols="30" rows="10"></textarea>
         </div>

         <div class="inputBox">
            <span>YOUR MESSAGE</span>            
            <textarea name="message" placeholder="Enter your message" required cols="30" rows="10"></textarea>
         </div>

      </div>

      <input type="submit" value="send message" name="send" class="btn">

   </form>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>