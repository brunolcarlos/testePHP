const api = {
	product: site_path + '/create'
}

$(function () {
	$('body').on('click', '.js_create_product', function (e) {
		e.preventDefault()
		$('#create_product').modal('show')
	});


	$('body').on('click', '.js_btn_create_product', function (e) {
		e.preventDefault()
		$('#create_product').modal('show')

		var _this = $(this)
		var parent = _this.parents('.class_create_product')

		const product = {
			name: parent.find('#name').val(),
			description: parent.find('#description').val(),
			price: parent.find('#price').val(),
			stock: parent.find('#stock').val(),
			product_image: parent.find('#product_image').val(),
		}

		if (
			!product?.name ||
			!product?.description ||
			!product?.price ||
			!product?.stock) {

			$('.js_alert').show()
			return;
		}

		fetch(
			api.product,

			{
				method: 'POST',
				headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
				body: JSON.stringify({
					name: product?.name,
					description: product?.description,
					price: parseInt(product?.price),
					stock: parseInt(product?.stock),
				})
			}
		).then(res => {
			$('input').val('')
			$('textarea').val('')
			$('.js_alert').hide()
		})
	});

	$('.product_price').maskMoney({ thousands: ".", precision: false });


})

