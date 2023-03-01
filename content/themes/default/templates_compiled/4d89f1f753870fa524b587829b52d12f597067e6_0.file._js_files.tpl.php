<?php
/* Smarty version 4.3.0, created on 2023-03-01 14:04:42
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/_js_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ff4d6a105090_69073604',
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
function content_63ff4d6a105090_69073604 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;
echo '<script'; ?>
 type="text/javascript">var site_path = "<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
";var ajax_path = site_path+"/includes/ajax/";<?php echo '</script'; ?>
><?php ob_start();
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/core.js?version=<?php echo date('m-d-Y H:i:s.u');?>
"><?php echo '</script'; ?>
>
<?php }
}
