<?php

require('../../../../bootstrap.php');

use App\models\Products;

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

    $product = new Products(
        $_POST['name'],
        $_POST['description'],
        $_POST['price'],
        $_POST['stock'],
    );
 
    echo json_encode(array('response' => 'success', 'id'=> $product->getId()  ));

} catch (Exception $e) {
    echo json_encode(array('error' => $e->getMessage() ));
}


