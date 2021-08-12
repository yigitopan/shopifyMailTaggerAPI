<?php

include_once("shopify.php");

$shopify = new Shopify();

$shopify->set_url("achteck.myshopify.com");
$shopify->set_apikey("9d818fbe82d6ab7751f028ff2966ab20");
$shopify->set_password("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");

$customers = $shopify->rest_api('/admin/api/2021-07/customers.json', array(), 'GET');
$customers = json_decode($customers['body'], true);

echo print_r($customers);
?>
