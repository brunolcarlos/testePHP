<?php

require('../../../../bootstrap.php');

use App\models\Products;
use App\models\ValidaProduct;

$_POST = post_request();


try {

    ValidaProduct::valida($_POST);

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


