<?php
/* bi dk
include_once("shopify.php");

$shopify = new Shopify();

$shopify->set_url("achteck.myshopify.com");
$shopify->set_apikey("9d818fbe82d6ab7751f028ff2966ab20");
$shopify->set_password("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");

$customers = $shopify->rest_api('/admin/api/2021-07/customers.json', array(), 'GET');
$customers = json_decode($customers['body'], true);

echo print_r($customers);

*/

/* asagidaki GET, sadece bu class'ı kullanarak calısıyor
include_once("shopify.php");

$shopify = new Shopify();

$store = "achteck.myshopify.com";
$schlussel = "9d818fbe82d6ab7751f028ff2966ab20";
$pw = "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";
$url = 'https://' . $schlussel . ':' . $pw . '@' . $store . '/admin/api/2021-07/customers.json';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

$decoded = json_decode($result);
print_r($decoded);
curl_close($ch);

*/

$store = "achteck.myshopify.com";
$schlussel = "9d818fbe82d6ab7751f028ff2966ab20";
$pw = "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";
$url = 'https://' . $schlussel . ':' . $pw . '@' . $store . '/admin/api/2021-07/customers.json';
$data = array ('customer' => array (
            'email' => 'yigitopan@gmail.com',
),);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));

$response = curl_exec($ch);

if (!$response)
{
    return false;
}

?>




