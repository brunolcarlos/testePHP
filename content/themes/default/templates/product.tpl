<!DOCTYPE html>
<html>
{{include file="head.tpl"}}
<body>
	{{include file="_js_files.tpl"}}
	{{include file="header.tpl" logo="testePHP"}}
	{{include file="modals.tpl"}}
	<div class="container">
		<div class="row products_header">
            {{if $product}}
            {{include file="_body_product.tpl" product=$product}}
            {{else}}
            <div class="col-8">
                <h3>Não encontrei o produto que está buscando!</h3>
            </div>
            <div class="col-4 arrow_left">
                <a href="{{$system['system_url']}}">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    Voltar
                </a>
            </div>
            {{/if}}
		</div>
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