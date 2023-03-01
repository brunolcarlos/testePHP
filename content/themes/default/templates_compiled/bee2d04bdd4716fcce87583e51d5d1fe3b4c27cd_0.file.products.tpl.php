<?php
/* Smarty version 4.3.0, created on 2023-03-01 14:04:42
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ff4d6a1805f9_90580151',
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
function content_63ff4d6a1805f9_90580151 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>

        <tr class='line_product hide_product<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
'>
          <th scope="row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</th>
          <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['name'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
</td>
          <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['description'];
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
</td>
          <td>R$<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['price'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
</td>
          <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['stock'];
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
</td>
          <td>
            <img class="small_image_table" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
">
          </td>
          <td>
            <a class='btn' href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
/edit/product/<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
"><i class="fa fa-pencil text-primary"></i></a>
            <button class='btn js_delete_product' data-id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
"><i class="fa fa-trash text-danger"></i></button>
          </td>
        </tr>
      <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>

    </tbody>
  </table>
</div><?php }
}
