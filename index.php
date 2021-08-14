<?php
/* büyük resim
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://9d818fbe82d6ab7751f028ff2966ab20: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@achteck.myshopify.com/admin/api/2021-07/customers.json",
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

curl_close($curl);


if ($err) {
    echo "cURL Error is  #:" . $err;
}
      büyük resim */

// +1. satırdan +37. satıra, burada mail domaini alınıyor.
sleep(10);
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://9d818fbe82d6ab7751f028ff2966ab20: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@achteck.myshopify.com/admin/api/2021-07/customers.json",
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

$mail = $decoded['customers'][0]['email'];
$userId = $decoded['customers'][0]['id'];
$tags = $decoded['customers'][0]['tags'];

curl_close($curl);

$mailArr = explode('@',$mail,2);
$dotSpot = strpos($mailArr[1],".");
$mailArr[1] = substr($mailArr[1], 0, $dotSpot);
$mail = $mailArr[1];

echo $mail;
echo $userId;
echo "<br>";
echo $tags;

if ($err) {
    echo "cURL Error is  #:" . $err;
}





$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://9d818fbe82d6ab7751f028ff2966ab20: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@achteck.myshopify.com/admin/api/2021-07/customers/".$userId.".json",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "PUT",
    CURLOPT_POSTFIELDS => "{\n    \"customer\": {\n        \"tags\": \"$tags, $mail\"\n    }\n}",
    CURLOPT_HTTPHEADER => array(
        "authorization: Basic OWQ4MThmYmU4MmQ2YWI3NzUxZjAyOGZmMjk2NmFiMjA6c2hwcGFfZjEzZDYyNmQxZWYyNDA4MzYxNDBhMDhkNTM5OWQwMjA=",
        "cache-control: no-cache",
        "content-type: application/json",
        "postman-token: 63e663b8-9bc9-e369-0913-2a422c6d8128"
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

?>




