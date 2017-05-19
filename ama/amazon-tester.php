<?php
require 'vendor/autoload.php';

$client = new GuzzleHttp\Client();

$access_key = 'AKIAIQ2Q2VX3RVKN3IRA';
$secret_key = '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';
$associate_tag = 'momorock-20';
$sort = 'price';
$timestamp = date('c');

$query = [
  'Service' => 'AWSECommerceService',
  'Operation' => 'ItemLookup',
  'Sort'=> 'price',
		
		
  'ResponseGroup' => 'Small',
  'IdType' => 'ASIN',
  'ItemId' => 'B00BGO0Q9O',
  'AssociateTag' => $associate_tag,
  'AWSAccessKeyId' => $access_key,
  'Timestamp' => $timestamp,
   
];


ksort($query);

$sign = http_build_query($query);

$request_method = 'GET';
$base_url = 'webservices.amazon.com';
$endpoint = '/onca/xml';

$string_to_sign = "{$request_method}\n{$base_url}\n{$endpoint}\n{$sign}";
$signature = base64_encode(
  hash_hmac("sha256", $string_to_sign, $secret_key, true)
);

$query['Signature'] = $signature;

try {
  $response = $client->request(
    'GET', 'http://webservices.amazon.com/onca/xml', 
    ['query' => $query]
  );

  $contents = new SimpleXMLElement($response->getBody()->getContents());
  echo "<pre>";
  print_r($contents);
  echo "</pre>";
} catch(Exception $e) {
  echo "something went wrong: <br>";
  echo $e->getMessage();
}