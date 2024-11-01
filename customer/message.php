<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You For Purchasing</title>
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
        <a href="customer/message.php">Categories</a>
        <a href="">Product</a>
        <!-- Use any element to open the sidenav -->
      </nav>
      <button class="col-sm-1 mb-2 btn btn" onclick="openNav()">
      </button>
    </header>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
        <h2 class="text-center">Thank You For Purchasing</h2>
        
   <?php
    // for instamojo
    include "../instamojo/instamojo.php";
    $api = new Instamojo\Instamojo("",""."https://test.instamojo.com/api/1.1/");
  
    $pay_id = $_GET['payment_request_id'];

    try {
      $response = $api->paymentRequestStatus($pay_id);
        ?> 
        <h2>Payment Details : </h2>
        <table class="table table-bordered">
        <tr>
          <th>You have Purchased :</th>
          <td><?= $response['purpose'];?></td>
        </tr>
        <tr>
          <th>Payment ID :</th>
          <td><?= $response['payments'][0]['payment_id'];?></td>          
        </tr>
        <tr>    
          <th>Payee Name :</th>
          <td><?= $response['payments'][0]['buyer_name'];?></td>
        </tr>
        <tr>
          <th>Payee Email :</th>
          <td><?= $response['payments'][0]['buyer_Email'];?></td>
        </tr>
        </table>
        <?php
    } catch (Exception $e) {
        print("Error: " .$e->getMessage());
    }
    ?> 
        </div>
      </div>
        </div>
</body>
</html>