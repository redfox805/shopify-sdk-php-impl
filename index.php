<?php

require 'vendor\autoload.php';
use PHPShopify\ShopifySDK as Api;

/**
 * initiate api connection
 */
$custom_app_creds = json_decode(file_get_contents("custom_app_credentials.json"), true);
$token = json_decode(file_get_contents("custom_app_token.json"), true);

$config = array(
    'ShopUrl' => $custom_app_creds['target_shop_url'],
    'AccessToken' => $token['access_token']
);

$shopify = new Api($config);

//call shopify api here
$orders = $shopify->Order->get();
var_dump($orders);

$customers = $shopify->Customer->get();
var_dump($customers);