<?php

echo "Redirect landing page <br/><br/>";

require 'vendor\autoload.php';
use PHPShopify\ShopifySDK as Api;
use PHPShopify\AuthHelper as Auth;

/**
 * install custom app and get access token
 */
$custom_app_creds = json_decode(file_get_contents("custom_app_credentials.json"), true);

$config = array(
    'ShopUrl' => $custom_app_creds['target_shop_url'],
    'ApiKey' => $custom_app_creds['api_key'],
    'SharedSecret' => $custom_app_creds['secret_key']
);

try {
    Api::config($config);
    $access_token = Auth::createAuthRequest($custom_app_creds['scopes']);
    /**
     * save token into json
     */
    SaveToken::intoJson($access_token);
    echo "Install Success!, you may leave this page..";
} catch(Exception $e) {
    echo "error, " . $e->getMessage();
}

class SaveToken {
    public static function intoJson($access_token) {
        $value = array('access_token' => $access_token);
        file_put_contents("custom_app_token.json", json_encode($value));
    }
}