<?php

require('../../../../bootstrap.php');

use App\models\Products;

$_POST = post_request();

if (!is_numeric($_POST['id']) || empty($_POST['id'])) {
    api_exit(500, "Stock é obrigatório!");
}

try {

    if (Products::delete_product($_POST['id'])) {
         api_exit(200, "Produto deletado!");
         return;
    }

    api_exit(500, "Erro ao deletar o produto!");

} catch (Exception $e) {
    echo json_encode(array('error' => $e->getMessage() ));
}