<?php

// fetch bootstrap
require('bootstrap.php');
require('./includes/models/Products.php');


$products = new Products();

$all_products = $products->get_products(10);

$smarty->assign('products', $all_products);

// page footer
page_footer("index");