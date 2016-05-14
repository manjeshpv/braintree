<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);
include 'db.php';
include 'functions.php';
//$price=$_SESSION['session_price'];
$price='1000';
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['card_number']) && !empty($_POST['card_name']) && !empty($_POST['expiry_month']) && !empty($_POST['expiry_year']) && !empty($_POST['cvv']))
{
$card_number=str_replace("+","",$_POST['card_number']);  
$card_name=$_POST['card_number'];
$expiry_month=$_POST['expiry_month'];
$expiry_year=$_POST['expiry_year'];
$cvv=$_POST['cvv'];
$expirationDate=$expiry_month.'/'.$expiry_year;

// require_once 'braintree/Braintree.php';
require 'vendor/autoload.php';
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('dk9f4xvkj2s5cmqw');
Braintree_Configuration::publicKey('rxznsjbjqgt28wqj');
Braintree_Configuration::privateKey('d9d5739eda75bac39f10d85da45f0a5a');

$result = Braintree_Transaction::sale(array(
'amount' => $price,
'creditCard' => array(
'number' => $card_number,
'cardholderName' => $card_name,
'expirationDate' => $expirationDate,
'cvv' => $cvv
)
));

if ($result->success) 
{
//print_r("success!: " . $result->transaction->id);
if($result->transaction->id)
{
$braintreeCode=$result->transaction->id;
updateUserOrder($braintreeCode,$session_user_id);
}
} 
else if ($result->transaction) 
{
echo '{"OrderStatus": [{"status":"2"}]}';
} 
else 
{
echo '{"OrderStatus": [{"status":"0"}]}';
}

}
?>
