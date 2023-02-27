<?php

require('../../../bootstrap.php');
require('../../models/Products.php');

use models\Products;

$_POST = json_decode(file_get_contents("php://input"),true);

if (!is_numeric($_POST['id']) || empty($_POST['id'])) {
    api_exit(500, "Stock é obrigatório!");
}

try {
    $product = new Products;

    if ($product->delete_product($_POST['id'])) {
         api_exit(200, "Produto deletado!");
         return;
    }

    api_exit(500, "Erro ao deletar o produto!");

} catch (Exception $e) {
    echo json_encode(array('error' => $e->getMessage() ));
}