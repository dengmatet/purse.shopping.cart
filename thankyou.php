<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You For Purchasing</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
.table-head {
  position: absolute;
  color: #fff;
  top: 15%;
  text-align:center;
  padding: 20px;
  display: flex;
  backdrop-filter: blur(20px);
}

.top {  
    top: 50%;
  margin: 10px;
  padding: 10px;
  backdrop-filter: blur(20px);
  background: transparent;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.5); 
}
table {
  width: 430px;
  height:355px;
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

</style>
<body>
    <header>
        <div class="logo">
            De<b>Shop</b>
        </div>
            <nav class="navigation">
              <a href="index.php">Home</a>
              <a href="product.php">Product</a>
              <a href="#">Categories</a>
              <a href="profile.php">Profile</a>
            </nav>
    </header>
    <div class="table-head">
        <h1>Thank You For Purchasing</h1> <br>
        </div>

   <!--- <?php
    // for instamojo

    //$pay_id = $_GET['payment_request_id'];

    //try {
      //  $response = $api->paymentRequestStatus($pay_id);
        //?> 
        <?php
    //} catch (Exception $e) {
      //  print("Error: " .$e->getMessage());
    //}
    ?> ---->
    
    <!--    <div class="top">
            <h2>Payment Details : </h2>
            <table>
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
        </div>-->
</body>
</html>