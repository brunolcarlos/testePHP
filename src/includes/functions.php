<?php

/**
 * page_footer
 *
 * @param string $page
 * @return void
 */
function page_footer($page)
{
    global $smarty;
    $smarty->assign('page', $page);
    $smarty->display("$page.tpl");
}
/**
 * api_exit
 *
 * @param int $code
 * @param string $message
 */
function api_exit($code, $message) {
    ob_start();
    header("Content-Type: application/json");
    http_response_code($code);
    echo json_encode(array('status' => $message));
    header('Connection: close');
    header('Content-Length: ' . ob_get_length());
    ob_end_flush();
    @ob_flush();
    if ($code >= 400) {
        exit;
    }
}

/* ------------------------------- */
/* Price Format */
/* ------------------------------- */

/**
 * secure
 *
 * @param number $value
 */

function price_format($price){
	return number_format($price,2,",",".");
}

/* ------------------------------- */
/* Description */
/* ------------------------------- */

/**
 * secure
 *
 * @param string $value
 */

function description($description){

	if (strlen($description) > 30) {
		return substr($description, 0, 30).'...';
	}
	return $description;

}

/* ------------------------------- */
/* Security */
/* ------------------------------- */

/**
 * secure
 *
 * @param string $value
 * @param string $type
 * @param boolean $quoted
 * @return string
 */
function secure($value, $type = "", $quoted = true)
{
    global $db;
    if ($value !== 'null' or $value !== '') {
        // [1] Sanitize
        /* Escape all (single-quote, double quote, backslash, NULs) */
        if (@get_magic_quotes_gpc()) {
            $value = stripslashes($value);
        }
        /* Convert all applicable characters to HTML entities */
        $value = @htmlentities($value, ENT_QUOTES, 'utf-8');
        // [2] Safe SQL
        $value = $db->real_escape_string($value);
        switch ($type) {
            case 'int':
            $value = ($quoted) ? "'" . intval($value) . "'" : intval($value);
            break;
            case 'datetime':
            $value = ($quoted) ? "'" . set_datetime($value) . "'" : set_datetime($value);
            break;
            case 'search':
            $value = (!is_empty($value)) ? "'%" . $value . "%'" : "''";
            break;  
            case 'search_tag':
            $value = (!is_empty($value)) ? "'+" . $value . "'" : "''";
            break;
            default:
            $value = $value ? "'" . $value . "'" : "''";
            break;
        }
    }
    return $value;
}

/* ------------------------------- */
/* GET POST HTTP REQUEST */
/* ------------------------------- */

function post_request(){
    return json_decode(file_get_contents("php://input"),true);
}