<?php
/* Smarty version 3.1.33, created on 2023-02-26 00:12:48
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63fa95f08a1287_14730132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c13e78d78dd1f2e3f1726c7642534eb1e20841f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/index.tpl',
      1 => 1677366766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:modals.tpl' => 1,
    'file:products.tpl' => 1,
  ),
),false)) {
function content_63fa95f08a1287_14730132 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>testePHP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/style.css?version=<?php echo date('m-d-Y H:i:s.u');?>
">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<?php echo '<script'; ?>
 src="https://use.fontawesome.com/552c330b83.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/core.js?version=<?php echo date('m-d-Y H:i:s.u');?>
"><?php echo '</script'; ?>
>
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logo'=>"testePHP"), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:modals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
		<?php $_smarty_tpl->_subTemplateRender("file:products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0, false);
?>
		<?php }?>
	</div>
</body>
</html><?php }
}
