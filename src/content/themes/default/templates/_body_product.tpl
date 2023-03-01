<!-- Start Modal create products -->
<div class="container">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3>Editar produto</h3>
                </div>
                <div class="col-4 arrow_left">
                    <a href="{{$system['system_url']}}">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Voltar
                    </a>
                </div>
            </div>
        </div>
        
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" value="{{$product['name']}}" id="name" placeholder="Nome do produto">
            </div>
                <div class="form-group">
                <label for="description">Descrição</label>
                <textarea class="form-control" name="description" id="description" placeholder="Descrição do produto">{{$product['description']}}</textarea> 
            </div>
            <div class="form-group">
            <label for="price">Preço</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input class="form-control product_price" value="{{$product['price']}}" name="price" id="price"  aria-label="Preço do produto">
            </div>
            </div>
            <div class="form-group">
                <label for="stock">Estoque</label>
                <input type="number" class="form-control" value="{{$product['stock']}}" id="stock" placeholder="Quantidade em estoque">
            </div>
            <div class="form-group">
                <label for="product_image">Escolha uma imagem</label>
                <input type="file" value="{{$product['product_image']}}" class="form-control-file" id="product_image">
            </div>
            <button class='btn btn-block btn-primary'>Salvar</button>
      </div>
</div>
<!-- End Modal create products -->