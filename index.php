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

// get start

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://9d818fbe82d6ab7751f028ff2966ab20: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@achteck.myshopify.com/admin/api/2021-07/customers/5442193359048.json",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "authorization: Basic OWQ4MThmYmU4MmQ2YWI3NzUxZjAyOGZmMjk2NmFiMjA6c2hwcGFfZjEzZDYyNmQxZWYyNDA4MzYxNDBhMDhkNTM5OWQwMjA=",
        "cache-control: no-cache",
        "content-type: application/json",
        "postman-token: af2f7c61-036e-5ac4-4b9f-9d328a1117c9"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$decoded = json_decode($response, true);
$mail = $decoded['customer']['email'];
echo $mail;
echo "<br>";

curl_close($curl);
$mail =  substr($mail, strpos($mail, '@') + 1);
$dotSpot = strpos($mail,".");
$mail = substr($mail, 0, $dotSpot);
echo $mail;
echo "<br>";


if ($err) {
    echo "cURL Error is #:" . $err;
} else {
   echo "asd";
}

// put start

/* put kes
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://9d818fbe82d6ab7751f028ff2966ab20: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@achteck.myshopify.com/admin/api/2021-07/customers/5442193359048.json",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "PUT",
    CURLOPT_POSTFIELDS => "{\n    \"customer\": {\n       \"email\": \"yigitopan@gmail.com\"\n    }\n}",
    CURLOPT_HTTPHEADER => array(
        "authorization: Basic OWQ4MThmYmU4MmQ2YWI3NzUxZjAyOGZmMjk2NmFiMjA6c2hwcGFfZjEzZDYyNmQxZWYyNDA4MzYxNDBhMDhkNTM5OWQwMjA=",
        "cache-control: no-cache",
        "content-type: application/json",
        "postman-token: e6e26266-3f8c-d5db-1e95-d98126ab5af0"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
put kes */
?>




