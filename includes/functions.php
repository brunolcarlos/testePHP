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

function price_format($price){
	return number_format($price,2,",",".");
}

function description($description){

	if (strlen($description) > 30) {
		return substr($description, 0, 30).'...';
	}
	return $description;

}