<?php

require_once('./vendor/autoload.php');
require('./variables.php');

use Pagantis\OrdersApiClient\Client;



try {
    $orderApiClient = new Client($_COOKIE['PUBLIC_KEY'], $_COOKIE['PRIVATE_KEY']);
    $order = $orderApiClient->getOrder($_COOKIE['ORDER_ID']);

    print("<pre>" . print_r($order->export(), true) . "</pre>");

} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
