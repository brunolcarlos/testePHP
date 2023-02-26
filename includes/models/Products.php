<?php 

namespace models;

class Products {
	
	protected $name;
	protected $description;
	protected $price;
	protected $stock;
	protected $image;

	//EMPTY
	public function __construct(){

	}


	/**
 	* GET PRODUCTS
 	*/
	public function get_products($offset = 0){
		global $db, $system;

		$offset *= $system['max_results'];

		$data = $db->query(sprintf("SELECT * FROM products ORDER BY id DESC LIMIT %s, %s ", secure($offset,'int', false), secure($system['max_results'],'int', false))) or die($db->error);

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