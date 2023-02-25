<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>testePHP</title>
	<link rel="stylesheet" type="text/css" href="{$system['system_url']}/includes/assets/css/style.css?version={date('m-d-Y H:i:s.u')}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/552c330b83.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

	<script type="text/javascript" src="{$system['system_url']}/includes/assets/js/core.js?version={date('m-d-Y H:i:s.u')}"></script>
</head>
<body>
	{include file="header.tpl" logo="testePHP"}
	{include file="modals.tpl"}
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
		{if !empty($products)}
		{include file="products.tpl" products=$products}
		{/if}
	</div>
</body>
</html>