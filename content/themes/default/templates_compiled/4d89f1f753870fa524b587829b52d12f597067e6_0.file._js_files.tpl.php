<?php
/* Smarty version 3.1.33, created on 2023-02-26 15:27:33
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/_js_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63fb6c55a95b63_92255344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d89f1f753870fa524b587829b52d12f597067e6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/_js_files.tpl',
      1 => 1677421647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fb6c55a95b63_92255344 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
echo '<script'; ?>
 type="text/javascript">var site_path = "<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
";var ajax_path = site_path+"/includes/ajax/";<?php echo '</script'; ?>
><?php ob_start();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/core.js?version=<?php echo date('m-d-Y H:i:s.u');?>
"><?php echo '</script'; ?>
>
<?php }
}
