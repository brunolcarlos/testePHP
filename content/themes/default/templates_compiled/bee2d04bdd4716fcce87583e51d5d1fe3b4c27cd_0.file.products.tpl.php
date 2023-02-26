<?php
/* Smarty version 3.1.33, created on 2023-02-26 23:07:29
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63fbd82116f719_12039727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bee2d04bdd4716fcce87583e51d5d1fe3b4c27cd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/products.tpl',
      1 => 1677449246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fbd82116f719_12039727 (Smarty_Internal_Template $_smarty_tpl) {
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
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <tr class='line_product hide_product<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
'>
          <th scope="row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</th>
          <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</td>
          <td>R$<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['product']->value['stock'];?>
</td>
          <td>
            <img class="small_image_table" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
">
          </td>
          <td>
            <a class='btn' href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
/edit/product/<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
"><i class="fa fa-pencil text-primary"></i></a>
            <button class='btn js_delete_product' data-id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
"><i class="fa fa-trash text-danger"></i></button>
          </td>
        </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
</div><?php }
}
