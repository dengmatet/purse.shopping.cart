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
    // SELECTING FROM DATABASE TABLE
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn,$sql); 
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pursey Product</title>
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
      <nav class="navigation">
        <a href="../index.php">Home</a>
        <a href="../admin/category.php">Categories</a>
        <a href="">Product</a>
      </nav>
      <button class="col-sm-1 mb-2 btn " onclick="openNav()">
      </button>
    </header>
    <div class="container mt-5">
      <div class="row">
      <?php 
    while($row = mysqli_fetch_array($result)) {
  ?>
    <div class="col-sm-4 mt-3 md-3">
      <div class="column card-deck">
        <div class="card  border-info p-2">
        <img src="<?= $row['product_image']; ?>" class="card-img-top" height="250" width="214" />
        <h5 class="card-title">Product : <?= $row['product_name']; ?></h5>
        <h3>Price : <?= number_format($row['product_price']); ?>-</h3>
        <a class="btn btn-outline-success btn-block btn-lg" href="order.php?id=<?= $row['id']; ?>">Buy Now</a>
        </div>
      </div>
    </div>
    <?php } ?>    
      </div>
    </div>
  </body>
</html>
