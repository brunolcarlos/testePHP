<?php
// set absolut & base path
define('ABSPATH',dirname(__FILE__).'/');
define('BASEPATH',dirname($_SERVER['PHP_SELF']));


// get system configurations
require_once(ABSPATH.'includes/config.php');


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
require_once(ABSPATH.'includes/functions.php');


// smarty config
require_once(ABSPATH.'includes/libs/Smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = ABSPATH.'content/themes/default/templates';
$smarty->compile_dir = ABSPATH.'content/themes/default/templates_compiled';
$smarty->loadFilter('output', 'trimwhitespace');





$smarty->assign('system',$system);
