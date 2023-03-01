const api = {
	product: site_path + '/create'
}

$(function () {
	$('body').on('click', '.js_create_product', function (e) {
		e.preventDefault()
		$('#create_product').modal('show')
	});

	$('body').on('click', '.js_delete_product', function (e) {
		e.preventDefault()
		var id = $(this).data('id')
		$('.js_btn_delete_product').data('id', `hide_product${id}`)
		$('.modal_delete_product').modal('show')
	});

	$('body').on('click', '.js_btn_delete_product', function (e) {
		e.preventDefault()
		var _this = $(this)
		var id = _this.data('id')
		console.log(`.${id}`)
		$(`.${id}`).hide()
		$('.modal_delete_product').modal('hide')
	});

	function description(text) {
		return text.length > 30 ?
			text.substring(0, 30) + '...' :
			text
	}

	function validImage(image) {
		return image != null ?
			image :
			site_path + '/content/uploads/notfound.jpeg'
	}

	async function createProdut(product) {
		await fetch(
			api.product,

			{
				method: 'POST',
				headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
				body: JSON.stringify({
					name: product?.name,
					description: product?.description,
					price: parseInt(product?.price),
					stock: parseInt(product?.stock),
					image: parseInt(product?.image),
				})
			}
		).then(res => {

			return res.json()

		}).then(res => {
			$('input').val('')
			$('textarea').val('')
			$('.js_alert').hide()
			$('.js_alert_success').show()

			$('.js_products_table').prepend(`
				<tr class='line_product hide_product${res?.id}'>
					<th scope="row">${res?.id}</th>
					<td>${product.name}</td>
					<td>${description(product.description)}</td>
					<td>R$${product.price}</td>
					<td>${product.stock}</td>
					<td>
					<img class="small_image_table" src="${validImage(product?.image)}">
					</td>
					<td>
					<a class='btn' href="#"><i class="fa fa-pencil text-primary"></i></a>
					<button class='btn js_delete_product' data-id="${res?.id}"><i class="fa fa-trash text-danger"></i></button>
					</td>
				</tr>
	  		`)

			setTimeout(() => {
				$('.js_alert_success').hide()
			}, 2000);
		}
		)
	}


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

		createProdut(product)

	});

	$('.product_price').maskMoney({ thousands: ".", precision: false });


})

