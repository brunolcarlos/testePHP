<?php

require('../../../bootstrap.php');
require('../../models/Products.php');

use models\Products;

$_POST = post_request();

if (!is_numeric($_POST['stock']) || empty($_POST['stock'])) {
    api_exit(500, "Stock é obrigatório!");
}

if (!is_numeric($_POST['price']) || empty($_POST['price'])) {
    api_exit(500, "Price é obrigatório!");
}

if (empty($_POST['description'])) {
    api_exit(500, "Description é obrigatório!");
}

if (empty($_POST['name'])) {
    api_exit(500, "Name é obrigatório!");
}

try {

    $product = new Products;
    $create = $product->create_product( $_POST );
    

    echo json_encode(array('response' => 'success', 'id'=> $create  ));

} catch (Exception $e) {
    echo json_encode(array('error' => $e->getMessage() ));
}


