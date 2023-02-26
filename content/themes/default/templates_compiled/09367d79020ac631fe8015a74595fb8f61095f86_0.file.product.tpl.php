<?php
/* Smarty version 3.1.33, created on 2023-02-26 18:32:27
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63fb97ab6b8b92_69734307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09367d79020ac631fe8015a74595fb8f61095f86' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/product.tpl',
      1 => 1677432724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:_js_files.tpl' => 1,
    'file:header.tpl' => 1,
    'file:modals.tpl' => 1,
    'file:_body_product.tpl' => 1,
  ),
),false)) {
function content_63fb97ab6b8b92_69734307 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

<body>
	<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:_js_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

	<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logo'=>"testePHP"), 0, false);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

	<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:modals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

	<div class="container">
		<div class="row products_header">
            <?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value) {
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

            <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:_body_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

            <?php ob_start();
}
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>

		</div>
	</div>
	<footer class='footer'>
		<div class="container">
			<div class='footer_info'>
				<h6>Desenvolvido por Bruno Luiz <a target="_blank" href='https://github.com/brunolcarlos/testePHP'>GITHUB</a></h6>
			</div>
		</div>
	</footer>
</body>
</html><?php }
}
