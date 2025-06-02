<?php

  $msg = "";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Purse-shopping-management-system</title>
    <link rel="stylesheet" href="static/css/style.css" />
    <script src="static/js/script.js"></script>
    <link rel="stylesheet" href="static/css/bootstrap.min.css" />
    <script src="static/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="static/img/shopping-bags.png" alt="" width="30" height="30" /><br>
        Pursey
      </div>
      <nav class="navigation">
        <a href="index.php">Home</a>
        <a href="admin/category.php">Categories</a>
        <a href="">Product</a>
        <!-- Use any element to open the sidenav -->
      </nav>
      <button class="col-sm-1 mb-2 btn btn-outline-info" onclick="openNav()">
        LOGIN
      </button>
    </header>
   <div id="main">
    <article class="index-category">
        <div class="letter">
             <h1>Welcome to Pursey</h1>
                <h3>Bags Collection</h3>
                 <p>Discover our exclusive Bags & Purses Collection, featuring the latest styles for every occasion. From chic handbags and elegant clutches to spacious totes and trendy crossbody bags, each piece is crafted with quality materials and attention to detail. Elevate your look with our versatile designs—perfect for work, travel, or a night out. Find your new favorite accessory and express your unique style with our curated selection!
                </p>
                <a href="customer/customer_add.php" class="col-sm-4 btn btn-outline-info">Shop Now</a>
        </div>
         <div class="index-news-box">
         <img src="pexels-photo-167703.jpeg" alt="" width="100%" height="100%"> 
         </div>       
    </article>
   </div>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
        >&times;</a
      >
      <div class="container mt-5 text-white">
        <h4 class="text-center">login</h4>
        <form
          class="form-inline"
          action="admin/login.php"
          method="post"
          enctype="multipart/form-data"
        >
          <div class="form-group">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <label for="">Email</label>
            <input
              type="text"
              name="email"
              class="form-control mt-2"
              required="required"
            />
          </div>
          <div class="form-group">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <label for="">Password</label>
            <input
              type="password"
              name="password"
              class="form-control mt-3"
              required="required"
            />
          </div>
          <div class="checkbox">
            <label class="text-default mt-3">
              <input type="checkbox" required="required" />Remember me</label
            >
            <a class="text-small text-white" href="">Forgot Password</a>
          </div>
          <button class="col-sm-12 mt-3 btn btn-outline-info" type="submit" name="submit">
            Login
          </button>
        </form>
      </div>


      <div class="slideshow-container mt-2">
     <!-- Full-width images with number and caption text -->
        <div class="mySlides">
          <img src="static/img/purse.png" height="150" style="width:100%">
        </div>
        <div class="mySlides">
          <img src="static/img/shop-window.png" height="150" style="width:100%">
        </div>
        <div class="mySlides">
          <img src="static/img/handbag.png" height="150" style="width:100%">
        </div>
      </div>
    </div>
    <script>
      var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>
  </body>
</html>
