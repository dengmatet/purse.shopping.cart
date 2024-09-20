<?php
    require "connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM login WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    $Username = $row['Username'];
    $Email = $row['Email'];
    $del_charge = 50;
    $total_price = $Email = $del_charge;
    $image = $row['Image_url'];
}else{
    echo "No product found";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websites WWW.Services.com | DengCode</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* section for top class and table row*/
.table-head {
  position: absolute;
  color: #fff;
  top: 64px;
  text-align:center;
  padding: 20px;
  display: flex;
  backdrop-filter: blur(20px);
}
.top {  
  top: 25px;
  position:relative;
  width: 1150px;
  margin: 20px;
  padding: 20px;
  display: flex;
  backdrop-filter: blur(20px);
  background: transparent;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.5); 
}
table {
  width: 430px;
  height:355px;
  position:flex;
  border-collapse: collapse;
}
th {
  width: 140px;
  color: #fff;
  margin: 5px;
  text-align: center;
  background:#162938;
  border-top: 1px solid #000;
}
td {
  font-size: 20px;
  color: #fff;
  padding: 20px;
  text-align: center;
  backdrop-filter: blur(40px);
  border-top: 1px solid #000;
}
h3{
    height: 40px;
    color:#fff;
    font-size:20px;
    background:#162938;
    text-align:center;
    
}

.sidebar{
  width: 350px;
  height: 380px;
  position: flex;
}
img{
    position: relative;
    width: 350px;
    height: 355px;
}
    </style>
</head>
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
        <div class="table-head">
            <h2>Fill the details to complete your order</h2>
        </div> 
        <div class="top">
            <table>
                <tr>
                    <th>Product Details</th>
                    <th>Token Details</th>
                </tr>
                <tr>
                    <th>Product Name</th>
                    <td><?= $Username; ?></td>
                </tr>
                <tr>
                    <th>Product Price</th>
                    <td>SSP <?= $Email; ?></td>
                </tr>
                <tr>
                    <th>Delivery Charge </th>
                    <td>SSP <?= number_format($del_charge); ?></td>
                </tr>
                <tr>
                    <th>Total Price</th>
                    <td>SSP <?= number_format($total_price); ?></td>
                </tr>
            </table>
            <div class=""><img src="<?= $image; ?>"></div>

        <div class="sidebar">
            <div class="form-box login">
                <h3>Enter your details </h3>
            <form action="#" method="POST" accept-charset="utf-8">
                <input type="hidden" name="Username" value="<?= $Username; ?>">
                <input type="hidden" name="Email" value="<?= $Email; ?>">
            <div class="input-box">
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
                <input type="Email" name="Email" placeholder="Enter your e-mail" required>
            </div> 
            <div class="input-box">
                <input type="tel" name="phone" id="" placeholder="Enter your phone number" required>
            </div>
                <button class="btn" type="submit">Click to pay</button>
            </form>
            </div>     
        </div>

    </div>

</body>
</html>