<?php

// set absolut & base path
define('ABSPATH',dirname(__FILE__).'/');
define('BASEPATH',dirname($_SERVER['PHP_SELF']));


// get system configurations
require_once(ABSPATH.'vendor/autoload.php');
require_once(ABSPATH.'src/includes/config.php');


// enviroment settings
if(DEBUGGING) {
    ini_set("display_errors", true);
    error_reporting(E_ALL ^ E_NOTICE);
} else {
    ini_set("display_errors", false);
    error_reporting(0);
}

// set global array with server infomation
$system = array(
	"system_url"=> SYS_URL,
    "max_results" => 10
);


//set database connection
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
$db->set_charset('utf8mb4'); 
if(mysqli_connect_error()) {
    _error(DB_ERROR);
}
$db->query("SET time_zone = '+0:00'");


// get functions
require_once(ABSPATH.'src/includes/functions.php');


// smarty config

$smarty = new Smarty;
$smarty->template_dir = ABSPATH.'src/content/themes/default/templates';
$smarty->compile_dir = ABSPATH.'src/content/themes/default/templates_compiled';
$smarty->loadFilter('output', 'trimwhitespace');





$smarty->assign('system',$system);
