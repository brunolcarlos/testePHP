<?php
/* Smarty version 4.3.0, created on 2023-03-01 15:57:48
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/_body_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ff67ecec9c97_25168974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e30d63641a96689ae3b9616235738fea80bc9ee' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/_body_product.tpl',
      1 => 1677433788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff67ecec9c97_25168974 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Start Modal create products -->
<div class="container">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3>Editar produto</h3>
                </div>
                <div class="col-4 arrow_left">
                    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Voltar
                    </a>
                </div>
            </div>
        </div>
        
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['name'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
" id="name" placeholder="Nome do produto">
            </div>
                <div class="form-group">
                <label for="description">Descrição</label>
                <textarea class="form-control" name="description" id="description" placeholder="Descrição do produto"><?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['description'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</textarea> 
            </div>
            <div class="form-group">
            <label for="price">Preço</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input class="form-control product_price" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['price'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
" name="price" id="price"  aria-label="Preço do produto">
            </div>
            </div>
            <div class="form-group">
                <label for="stock">Estoque</label>
                <input type="number" class="form-control" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['stock'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
" id="stock" placeholder="Quantidade em estoque">
            </div>
            <div class="form-group">
                <label for="product_image">Escolha uma imagem</label>
                <input type="file" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['product_image'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
" class="form-control-file" id="product_image">
            </div>
            <button class='btn btn-block btn-primary'>Salvar</button>
      </div>
</div>
<!-- End Modal create products --><?php }
}
