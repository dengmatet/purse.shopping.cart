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
    if(isset($_POST['submit'])) {

    // SET VALID DATA  
    $p_name = $_POST['product_name'];
    $p_price = $_POST['product_price'];
    $target_dir = "../static/img/";

    $target_file = $target_dir.basename($_FILES['product_image']["name"]);
    move_uploaded_file($_FILES['product_image']["tmp_name"], $target_file);

    // INSERTING DATA INTO DATABASE
    $sql = "INSERT INTO product(product_name, product_price, product_image)VALUES('$p_name','$p_price','$target_file')";

    if(mysqli_query($conn,$sql))
        {
            $msg = "Product Added to the database successfully!";
        }
        else
        {
            $msg = "Failed to add the product!";
        }        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Information</title>
    <link rel="stylesheet" href="../static/style.css" />
    <link rel="stylesheet" href="../static/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../static/js/bootstrap.min.js" />
</head>
<body>
    <div class="container">
        <div class="row justify-content-right">
            <div class="col-md-5 bg-light mt-5 text-info rounded">
                <h2 class="text-center p-2 ">Add Product Information</h2>
                <form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">   
                    <div class="form-group mt-3">
                    <label for="Product Name" class="custom-file-input text-info">Product Name</label>
                        <input type="text" name="product_name" id="" class="form-control" required="required">
                    </div>
                    <div class="form-group mt-3">
                    <label for="Product price" class="custom-file-input text-info">Product price</label>
                        <input type="number" name="product_price" id="" class="form-control" required="required">
                    </div>
                    <div class="form-group mt-3">
                        <div class="custom-file">
                            <label for="customFile" class="custom-file-input text-info">Choose Product Image</label>
                            <input type="file" name="product_image" class="custom-file-input" id="customFile" required="required">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                    <input type="submit" name="submit" class="col-12 btn btn-outline-danger btn-block" value="Add">
                    </div>
                    <div class="form-group mt-3">
                        <h4 class="text-center"><?= $msg; ?></h4>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-right">
            <div class="col-md-5 p-2 mt-3 bg-light rounded">
                <a href="product.php" class="col-md-12 btn btn-outline-warning btn-block btn-lg">Go to product page</a>
            </div>
        </div>
    </div>
</body>
</html>