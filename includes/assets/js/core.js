
$(function(){
	$('body').on('click', '.js_create_product', function(e) {
		e.preventDefault()
		$('#create_product').modal('show')
	});

	$('.product_price').maskMoney({thousands: ".", precision: false});

})

