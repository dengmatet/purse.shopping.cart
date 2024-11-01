<?php
  $p_name = $_POST["product_name"];
  $p_price = $_POST["product_price"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  // line for instamojo
  include "../instamojo/instamojo.php";
  $api = new Instamojo\Instamojo("",""."https://test.instamojo.com/api/1.1/")



  $instance = new Instamojo('USERNAME', 'PASSWORD', 'TOKEN_FROM_INSTAMOJO');
  $auth = $instance->apiAuth();
  $instance->setTitle('TITLE');
  $instance->setDescription('DESCRIPTION');
  $instance->setCurrency('INR');
  $instance->setBasePrice('100');
  $instance->setFilePath('IMG.jpg');
  $instance->setCoverPath('COVER.jpg');
  $offer = $instance->createOffer();
  print_r($offer); 








  // create new payment
  try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $p_name,
        "amount" => $p_price,
        "send_email" => true,
        "email" => $email,
        "buyer_name" => $name,
        "phone" => $phone,
        "sand_sms" => true,
        "allow_repeated_payments" => false,
        "redirect_url" => "http://localhost/example/message.php"
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