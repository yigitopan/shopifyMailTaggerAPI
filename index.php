<?php
/* sen bi uza
include_once("shopify.php");

$shopify = new Shopify();

$shopify->set_url("achteck.myshopify.com");
$shopify->set_apikey("9d818fbe82d6ab7751f028ff2966ab20");
$shopify->set_password("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");

$customers = $shopify->rest_api('/admin/api/2021-07/customers.json', array(), 'GET');
$customers = json_decode($customers['body'], true);

echo print_r($customers);

*/



$ch = curl_init();

$url = "https://achteck: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@achteck.myshopify.com/admin/api/2021-07/customers.json";

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

$resp = curl_exec($ch);

if($e = curl_error($ch)){
    echo $e;
}
else {
    $decoded = json_decode($resp);
    print_r($decoded);
}
?>
