<?php

require_once('../vendor/autoload.php');
require_once('variables.php');

use Pagantis\OrdersApiClient\Client;


const PUBLIC_KEY = $miPUBLIC_KEY; //Set your public key

const PRIVATE_KEY = $miPRIVATE_KEY; //Set your private key

const ORDER_ID = $miORDER_ID; //Set the order to get

try {
    $orderApiClient = new Client(PUBLIC_KEY, PRIVATE_KEY);
    $order = $orderApiClient->getOrder(ORDER_ID);

    print("<pre>" . print_r($order->export(), true) . "</pre>");

} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
