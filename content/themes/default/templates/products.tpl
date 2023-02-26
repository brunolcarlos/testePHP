<div class="products">
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
      {{foreach $products as $product}}}
        <tr class='line_product hide_product{$product['id']}'>
          <th scope="row">{{$product['id']}}</th>
          <td>{{$product['name']}}</td>
          <td>{{$product['description']}}}</td>
          <td>R${{$product['price']}}}</td>
          <td>{{$product['stock']}}}</td>
          <td>
            <img class="small_image_table" src="{$product['image']}">
          </td>
          <td>
            <a class='btn' href="{{$system['system_url']}}/edit/product/{{$product['id']}}"><i class="fa fa-pencil text-primary"></i></a>
            <button class='btn js_delete_product' data-id="{{$product['id']}}"><i class="fa fa-trash text-danger"></i></button>
          </td>
        </tr>
      {{/foreach}}}
    </tbody>
  </table>
</div>