<!DOCTYPE html>
<html>
{{include file="head.tpl"}}
<body>
	{{include file="header.tpl" logo="testePHP"}}
	{{include file="modals.tpl"}}
	<div class="container">
		<div class="row products_header">
			<div class="col-8">
				<h3>Produtos</h3>
			</div>
			<div class="col-4">
				<div class="create_product">
					<button class="btn btn-small btn-primary js_create_product">
						<i class="fa fa-plus"></i>
					</button>
				</div>
			</div>
		</div>
		{{if !empty($products)}}
		{{include file="products.tpl" products=$products}}
		{{/if}}

		
	</div>
	<footer class='footer'>
		<div class="container">
			<div class='footer_info'>
				<h6>Desenvolvido por Bruno Luiz <a target="_blank" href='https://github.com/brunolcarlos/testePHP'>GITHUB</a></h6>
			</div>
		</div>
	</footer>
</body>
</html>