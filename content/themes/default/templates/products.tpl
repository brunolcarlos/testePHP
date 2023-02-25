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
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      {foreach $products as $product}
        <tr>
        <th scope="row">{$product['id']}</th>
        <td>{$product['name']}</td>
        <td>{$product['description']}</td>
        <td>R${$product['price']}</td>
        <td>{$product['stock']}</td>
        <td>
          <img class="small_image_table" src="{$product['image']}">
        </td>
        <td>
          <a href="#"><i class="fa fa-pencil"></i></a>
        </td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</div>