<?php

// fetch bootstrap
require('bootstrap.php');

use App\models\Products;

$products = new Products;

$all_products = $products->get_products();

$smarty->assign('products', $all_products);

// page footer
page_footer("index");