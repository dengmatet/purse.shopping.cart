<?php
  $Username = $_POST['Username'];
  $Email = $_POST['Email'];
  $name = $_POST['name'];
  $Email = $_POST['Email'];
  $phone = $_POST['phone'];

  // line for instamojo
  

  // create new payment
  try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $Username,
        "amount" => $Email,
        "send_email" => true,
        "buyer_name" => $name,
        "email" => $Email,
        "phone" => $phone,
        "sand_sms" => true,
        "allow_repeated_payments" => false,
        "redirect_url" => "https://localhost/example/thankyou.php"
        //"webhook" =>
        ));
        //print_r($response);
    $pay_url = $response['longurl'];
    header("location:$pay_url");
  }
  catch (Exception $e) {
    print('Error: ' . $e->getMessage());
  }
?>