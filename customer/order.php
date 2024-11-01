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
    
    if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    $p_name = $row["product_name"];
    $p_price= $row["product_price"];
    $del_charge = 50;
    $total_price = $p_price + $del_charge;
    $p_image = $row["product_image"];
    }
    else
    {
    echo "No product found";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete your order</title>
    <link rel="stylesheet" href="../static/style.css" />
    <link rel="stylesheet" href="../static/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../static/js/bootstrap.min.js" />
</head>
<body>
<header>
      <div class="logo">
        <img src="../static/img/shopping-bags.png" alt="" width="30" height="30" />
        <br />
        De<b>Shop</b>
      </div>
      <nav class="navigation">
        <a href="../index.php">Home</a>
        <a href="../admin/category.php">Categories</a>
        <a href="">Product</a>
      </nav>
      <button class="col-sm-1 mb-2 btn " onclick="openNav()">
      </button>
    </header>

    <div class="container index-category">
        <div class=" mt-2">
            <h3 class="bg-info text-white">Product Details</h3>
            <table class="table table-bordered" width="300">
                <tr>
                    <th>Product Name</th>
                    <td><?= $p_name; ?></td>
                    <td rowspan="4" class="text-center">
                        <img src="<?= $p_image; ?>" alt="" width="250">
                    </td>
                </tr>
                <tr>
                    <th>Product Price</th>
                    <td><?= number_format($p_price); ?> -SSP</td>
                </tr>
                <tr>
                    <th>Delivery Charge </th>
                    <td><?= number_format($del_charge); ?> -SSP</td>
                </tr>
                <tr>
                    <th>Total Price</th>
                    <td><?= number_format($total_price); ?> -SSP</td>
                </tr>
            </table>
        </div>
        <div class="">
            <h3 class="mt-2 bg-info text-white">Enter your details</h3>
            <form class="form-inline" action="pay.php" method="post" accept-charset="utf-8">
                    <input type="hidden" name="product_name" value="<?= $p_name; ?>">
                    <input type="hidden" name="product_price" value="<?= $p_price; ?>">
                <div class="form-group">
                    <input
                        class="form-control"
                        type="text" name="name"
                        placeholder="Enter your name"
                        required="required">
                </div>
                <div class="form-group">
                    <input 
                        class="form-control mt-4"
                        type="email" name="email"
                        placeholder="Enter your e-mail"
                        required="required">
                </div>
                <div class="form-group">
                    <input 
                        class="form-control mt-4"
                        type="tel" name="phone"
                        placeholder="Enter your phone"
                        required="required">
                </div>
                <div class="form-group">
                    <input 
                        class="form-control mt-4"
                        type="text" name=""
                        placeholder="Describe"
                        required="required">
                </div>
                <div class="form-group">
                    <button
                        class="col-sm-12 mt-4 btn btn-outline-danger"
                        type="submit"
                        name="submit">
                         Click to pay : <?= number_format($total_price); ?> SSP
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>