<?php 

// fetch bootstrap

/**
 * GET PRODUCTS
 */
class Products {
	
	
	public function get_products($limit){
		global $db, $system;

		$data = $db->query(sprintf("SELECT * FROM products LIMIT %s", 10)) or die($db->error);

		if ($data->num_rows > 0) {
			while ($product = $data->fetch_assoc()) {
				$product['price'] = price_format($product['price']);
				$product['image'] = $product['image'] ? $product['image'] : $system['system_url'].'/content/uploads/notfound.jpeg';
				$product['description'] = description($product['description']);
				$products[] = $product;
			}

			return $products;
		}

	}


}