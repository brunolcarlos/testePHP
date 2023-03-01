<?php
/* Smarty version 4.3.0, created on 2023-03-01 15:57:00
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/_js_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ff67bcd0c652_30790575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d89f1f753870fa524b587829b52d12f597067e6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/_js_files.tpl',
      1 => 1677682594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff67bcd0c652_30790575 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
echo '<script'; ?>
 type="text/javascript">var site_path = "<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
";var ajax_path = site_path+"/src/includes/ajax/";<?php echo '</script'; ?>
><?php ob_start();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/src/includes/assets/js/core.js?version=<?php echo date('m-d-Y H:i:s.u');?>
"><?php echo '</script'; ?>
>
<?php }
}
