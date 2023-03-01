<?php

// fetch bootstrap
require('bootstrap.php');

use App\models\Products;

if (!is_numeric($_GET['id']) || empty($_GET['id'])) {
   echo header("Location: " . SYS_URL . "/");
}

$product = Products::get_product($_GET['id']);

$smarty->assign('product', $product);

// page footer
page_footer("product");