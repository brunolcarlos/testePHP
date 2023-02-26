<?php
/* Smarty version 3.1.33, created on 2023-02-26 15:27:53
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63fb6c69f1e983_19206700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c13e78d78dd1f2e3f1726c7642534eb1e20841f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/index.tpl',
      1 => 1677421668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:_js_files.tpl' => 1,
    'file:header.tpl' => 1,
    'file:modals.tpl' => 1,
    'file:products.tpl' => 1,
  ),
),false)) {
function content_63fb6c69f1e983_19206700 (Smarty_Internal_Template $_smarty_tpl) {
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
			<div class="col-8">
				<h3>Produtos</h3>
			</div>
			<div class="col-4">
				<div class="create_product">
					<button class="btn btn-small btn-primary js_create_product">
						<i class="fa fa-plus"></i>
					</button>
				</div>
			</div>
		</div>
		<?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['products']->value)) {
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

		<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0, false);
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

		<?php ob_start();
}
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>


		
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
