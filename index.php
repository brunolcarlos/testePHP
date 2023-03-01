<?php

// fetch bootstrap
require('bootstrap.php');

use App\models\Products;


$all_products = Products::get_products();

$smarty->assign('products', $all_products);

// page footer
page_footer("index");