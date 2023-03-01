<?php
/* Smarty version 4.3.0, created on 2023-03-01 16:02:13
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/src/content/themes/default/templates/_js_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ff68f5323b97_38836226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be1ce62854bb0ecfb6ea9528bed429d345a3ed41' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/src/content/themes/default/templates/_js_files.tpl',
      1 => 1677682594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff68f5323b97_38836226 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;
echo '<script'; ?>
 type="text/javascript">var site_path = "<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
";var ajax_path = site_path+"/src/includes/ajax/";<?php echo '</script'; ?>
><?php ob_start();
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/src/includes/assets/js/core.js?version=<?php echo date('m-d-Y H:i:s.u');?>
"><?php echo '</script'; ?>
>
<?php }
}
