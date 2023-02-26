<?php
/* Smarty version 3.1.33, created on 2023-02-27 00:46:22
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63fbef4ed01ba6_40460221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bee2d04bdd4716fcce87583e51d5d1fe3b4c27cd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/products.tpl',
      1 => 1677455180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fbef4ed01ba6_40460221 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="products">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Estoque</th>
        <th scope="col">Imagem</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody class='js_products_table'>
      <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

        <tr class='line_product hide_product<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
'>
          <th scope="row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</th>
          <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['name'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</td>
          <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['description'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</td>
          <td>R$<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['price'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</td>
          <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['stock'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</td>
          <td>
            <img class="small_image_table" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
">
          </td>
          <td>
            <a class='btn' href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
/edit/product/<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
"><i class="fa fa-pencil text-primary"></i></a>
            <button class='btn js_delete_product' data-id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
"><i class="fa fa-trash text-danger"></i></button>
          </td>
        </tr>
      <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>

    </tbody>
  </table>
</div><?php }
}
