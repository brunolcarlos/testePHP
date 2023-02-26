<?php

// fetch bootstrap
require('bootstrap.php');
require('./includes/models/Products.php');

use models\Products;

if (!is_numeric($_GET['id']) || empty($_GET['id'])) {
    header("Location : /");
}

$products = new Products;

$product = $products->get_product($_GET['id']);

$smarty->assign('product', $product);

// page footer
page_footer("product");