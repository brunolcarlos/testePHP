<div id="create_product" class="modal" tabindex="-1" style="display: none">
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
          <label for="name">Descrição</label>
          <textarea class="form-control" name="description" id="description" placeholder="Descrição do produto"></textarea> 
        </div>
        <div class="form-group">
          <label for="name">Preço</label>
          <div class="input-group mb-3">

            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input class="form-control product_price" name="price" aria-label="Preço do produto">
          </div>
        </div>
        <div class="form-group">
          <label for="name">Estoque</label>
          <input type="number" class="form-control" id="stock" placeholder="Quantidade em estoque">
        </div>
        <div class="form-group">
          <label for="product_image">Escolha uma imagem</label>
          <input type="file" class="form-control-file" id="product_image">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Criar produto</button>
      </div>

    </div>
  </div>
</div>