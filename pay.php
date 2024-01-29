<?php 
$product_name = $_POST["product_name"];
$price = $_POST["product_price"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$prod_id= $_POST["product_id"];
$o_id= $_POST["owner_id"];
include 'src/instamojo.php';
//change private key private api key 

$api = new Instamojo\Instamojo('YOUR_INSTAMOJO_CLIENT_ID', 'YOUR_INSTAMOJO_CLIENT_SECRET','https://www.instamojo.com/api/1.1/');

//private
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        "pro" => $prod_id,
        "own" => $o_id,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://localhost/payment/thankyou.php", // Change like http://example.com/payment/thankyou.php
        "webhook" => "http://localhost/payment/webhook.php"  // // Change like http://example.com/payment/webhook.php
        ));
        $expiry= $_POST['expiry'];
        $prod_id= $_POST["product_id"];
        $o_id= $_POST["owner_id"];
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>