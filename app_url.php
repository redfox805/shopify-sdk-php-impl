<?php

echo "Welcome! (app url) </br></br>";

/**
 * check hmac auth code
 */
if (isset($_GET['hmac'])) {
    $hmac = $_GET['hmac'];
    $hmac_params = array_diff_key($_GET, array('hmac' => ''));
    ksort($params);

    $custom_app_creds = json_decode(file_get_contents("custom_app_credentials.json"), true);

    $computed_hmac = hash_hmac(
        'sha256', 
        http_build_query($hmac_params), 
        $custom_app_creds['secret_key']
    );

    if (hash_equals($hmac, $computed_hmac)) {
        header("Location: " . $custom_app_creds['redirect_url']);
    } else {
        echo "Failed, wrong hmac!";
    }
} else {
    echo "No hmac attached!";
}