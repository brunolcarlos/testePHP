<?php
/* Smarty version 3.1.33, created on 2023-02-26 23:04:36
  from '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/modals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63fbd774d5ede3_10369706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a82c49ea6faeaeeb63d7686b9cf2216b3e74c72' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/testePHP/content/themes/default/templates/modals.tpl',
      1 => 1677448857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fbd774d5ede3_10369706 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Start Modal create products -->
<div id="create_product" class="modal class_create_product" tabindex="-1" style="display: none">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cadastrar produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" placeholder="Nome do produto">
        </div>

        <div class="form-group">
          <label for="description">Descrição</label>
          <textarea class="form-control" name="description" id="description" placeholder="Descrição do produto"></textarea> 
        </div>
        <div class="form-group">
          <label for="price">Preço</label>
          <div class="input-group mb-3">

            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input class="form-control product_price" name="price" id="price" aria-label="Preço do produto">
          </div>
        </div>
        <div class="form-group">
          <label for="stock">Estoque</label>
          <input type="number" class="form-control" id="stock" placeholder="Quantidade em estoque">
        </div>
        <div class="form-group">
          <label for="product_image">Escolha uma imagem</label>
          <input type="file" class="form-control-file" id="product_image">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary js_btn_create_product">Criar produto</button>
      </div>
      <span class="alert alert-warning margin-10 js_alert">Todos os campos são obrigatórios!</span>
      <span class="alert alert-success margin-10 js_alert_success">Parábens, seu produto foi criado!</span>
    </div>
  </div>
</div>
<!-- End Modal create products -->

<!-- Start Modal create delete tr products -->
<div class="modal modal_delete_product">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Deletar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <div class="modal-body">
          <h6>Você deseja deletar este produto ?</h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button data-id="" type="button" class="btn btn-primary js_btn_delete_product">Deletar</button>
        </div>
    </div>
  </div>
</div>
<!-- End Modal create delete tr products --><?php }
}
