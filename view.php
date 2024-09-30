<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeShop View.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    /* section style for images and description */ 
.container{
  padding: 15px;
  position:relative;
  width: 1150px;
  display: flex;
  backdrop-filter: blur(20px);
  background: transparent;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.5); 

}
.img {
  padding: 3px; 
  width: 220px;
  border: 1px solid #fff;
  border-top:none;
  border-left:none;
  border-bottom:none;
  display:flex;
  flex-wrap: wrap;
  float: left;
  text-align: center;
  align-items: center;
}
.decs {
  color: #fff;
  font-size: 16px;
  font-weight: 500;
}
a {
  padding: 10px;
  text-decoration: none;
}

</style>
<body>
    <header>
    <div class="logo">De<b>Shop</b></div>
        <nav class="navigation">
          <a href="index.php">Home</a>
          <a href="product.php">Product</a>
          <a href="#">Categories</a>
          <a href="profile.php">Profile</a>
        </nav>
    </header>

    <section>
      <div class="container">
        <?php
          require "upload.php";
          $sql = "SELECT * FROM login";
          $result = mysqli_query($conn,$sql); 
        ?>

        <?php 
          while($row = mysqli_fetch_array($result)) {
        ?>
            <div class="img">
                <img src="<?= $row['Image_url']; ?>" height="200" width="214">
                  <div class="decs">
                    <?= $row['Username']; ?>
                  </div>
                  <div class="decs">
                    <?= $row['Email']; ?>
                  </div>
                  <a class="btn" href="order.php?id=<?= $row['id']; ?>">Buy Now</a>
            </div>
        <?php } 
        ?>
      </div>
    </section>
</body>
</html>