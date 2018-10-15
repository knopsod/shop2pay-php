<?php 

// $url = 'http://shop2pay-dev-test.herokuapp.com/api/v1/transactions'; 
$url = 'http://localhost:3000/api/v1/transactions'; 
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch,CURLOPT_POST, true); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST'); 
// curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Authorization': 'Token token=tb3vQwhAnJc2PNkusWvkgB4pA8wnVLpy7CXpEsz7jL')); 
// curl_setopt($ch, CURLOPT_POSTFIELDS, '{ "client_url":"https://itgadget.co.th","client_rest_api_endpoint":"","client_transaction_id":"asdadwdasda321545453","bank_account":"John Doe","bank_no": "999-9-9999-9","bank_name":"kasikorn","bank_short_name":"KBANK","transfer_type":"ATM","amount":"2999","transferred_datetime": "2018-01-01 10:00:00","transfer_detail": "Some comment message from user","is_approved": "false"}'); 
curl_setopt($ch, CURLOPT_POSTFIELDS, 
  http_build_query(
    array(
      "client_url" => "https://itgadget.co.th",
      "client_rest_api_endpoint" => "",
      "client_transaction_id" => "asdadwdasda321545453",
      "bank_account" => "John Doe",
      "bank_no" => "999-9-9999-9",
      "bank_name" => "kasikorn",
      "bank_short_name" => "KBANK",
      "transfer_type" => "ATM",
      "amount" => "2999",
      "transferred_datetime" => "2018-01-01 10:00:00",
      "transfer_detail" => "Some comment message from user",
      "is_approved" => "false"
    )
  )
); 
// execute! 
$response = curl_exec($ch); 

if($response === false) 
{ 
echo ' ' . curl_error($ch); 
} 
curl_close($ch); 
print_r($response);