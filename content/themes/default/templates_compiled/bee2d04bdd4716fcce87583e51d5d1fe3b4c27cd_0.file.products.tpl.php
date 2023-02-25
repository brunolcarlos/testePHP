<?php
/* Smarty version 3.1.33, created on 2023-02-25 23:11:54
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63fa87aace4f93_76227013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bee2d04bdd4716fcce87583e51d5d1fe3b4c27cd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/products.tpl',
      1 => 1677363113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fa87aace4f93_76227013 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <tr>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
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
          <a href="#"><i class="fa fa-pencil"></i></a>
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
