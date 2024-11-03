<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "shopping";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

    $msg = "";

// SET THE DATA TYPE   
if(isset($_POST["submit"]))
 {
    $Email = $_POST["email"];
    $Password = $_POST["password"];

// INSERT THE DATA INTO TABLE
$sql = "INSERT INTO login (email, password) VALUES ('$Email', '$Password')";

// CHECK THE INSERTION
if ($conn->query($sql) === TRUE)
{
     $msg = "Accessed is successfully!";
}
else
{
    $msg = "Access is failed!: " . $sql . "<br/>" . $conn->error;
}        
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purse Slideshow</title>
    <link rel="stylesheet" href="../static/style.css" />
    <link rel="stylesheet" href="../static/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../static/js/bootstrap.min.js" />
</head>
<body>
    <header>
      <div class="logo">
        <img src="../static/img/shopping-bags.png" alt="" width="30" height="30" /><br />
        Pursey
      </div>
      <div class="form-group">
            <h3 class="text-center text-info"><?= $msg; ?></h3>
          </div>
      <a href="../index.php" class="col-sm-1  mb-2 btn btn-outline-info">Next</a>
</header>
    <!-- Slideshow container -->
<div class="slideshow-container mt-2">

<!-- Full-width images with number and caption text -->

<div class="mySlides">
  <div class="numbertext">1 / 4</div>
  <img src="../product-img/pngtree-exquisite-handbags-promotion-season-simple-yellow-banner-image.jpg" height="500" style="width:100%">
  <div class="text">pngtree-exquisite-handbags-promotion-season-simple-yellow-banner</div>
</div>

<div class="mySlides">
  <div class="numbertext">2 / 4</div>
  <img src="../static/img/white.jpg" height="500" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides">
  <div class="numbertext">3 / 4</div>
  <img src="../static/img/black.jpg" height="500" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides">
  <div class="numbertext">4 / 4</div>
  <img src="../product-img/download (17).jpeg" height="500" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}s
</script>
</body>
</html>