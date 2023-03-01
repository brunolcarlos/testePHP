<?php
/* Smarty version 4.3.0, created on 2023-03-01 14:04:42
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ff4d6a138618_19231400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2332d98b18d8348ee21c7b0515a87a4dbef7bb92' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/header.tpl',
      1 => 1677433245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff4d6a138618_19231400 (Smarty_Internal_Template $_smarty_tpl) {
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
