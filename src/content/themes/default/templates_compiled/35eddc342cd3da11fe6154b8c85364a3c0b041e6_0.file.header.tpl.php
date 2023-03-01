<?php
/* Smarty version 4.3.0, created on 2023-03-01 16:02:13
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/src/content/themes/default/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ff68f5328e37_99465288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35eddc342cd3da11fe6154b8c85364a3c0b041e6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/src/content/themes/default/templates/header.tpl',
      1 => 1677433245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff68f5328e37_99465288 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header">
	<div class="container logo_desktop">
		<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
"><?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
</a>
		</nav>
	</div>
</div><?php }
}
