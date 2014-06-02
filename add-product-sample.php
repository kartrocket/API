<?php

	$url = 'http://api.kartrocket.co/index.php?route=feed/web_api/addproduct&key=SAAHIL';

	$product_image = array(
						'data/product_image_1.jpg',
						'data/product_image_2.jpg',
						'data/product_image_3.jpg',
						'data/product_image_n.jpg',
						);
	
	$product_option = array(
						'Option One' => array(
									'0' => array(
											'option_name' => 'Option One Value 1',
											'option_sku' => 'OOV1',
											'quantity' => '10',
											'price' => '1000',
											'weight' => '0.6',
											'subtract' => '1',
											),
									'1' => array(
											'option_name' => 'Option One Value 2',
											'option_sku' => 'OOV2',
											'quantity' => '10',
											'price' => '2000',
											'weight' => '1.0',
											'subtract' => '1',
											),
									'2' => array(
											'option_name' => 'Option One Value 3',
											'option_sku' => 'OOV3',
											'quantity' => '10',
											'price' => '3000',
											'weight' => '1.0',
											'subtract' => '1',
											),
								),
						'Option Two' => array(
									'0' => array(
											'option_name' => 'Option Two Value 1',
											'option_sku' => 'OTV1',
											'quantity' => '10',
											'price' => '1000',
											'weight' => '0.6',
											'subtract' => '1',
											),
									'1' => array(
											'option_name' => 'Option Two Value 1',
											'option_sku' => 'OTV2',
											'quantity' => '10',
											'price' => '2000',
											'weight' => '1.0',
											'subtract' => '1',
											),
								),
						);
	$product_attribute = array(
						'0' => array(
								'group' => 'Attribute Group 1',
								'name' => 'Attribute 1',
								'description' => 'Attribute Value 1',
								),							
						'1' => array(
								'group' => 'Attribute Group 2',
								'name' => 'Attribute 2',
								'description' => 'Attribute Value 2',
								),
						);
	
	$product_category = array(
						'Category One>Category Two',
						'Category One>Category Three',
						'Category Four',
						);
	$product_data = array(
						'name' => 'Product Name', #Required
						'description' => 'Product Description',
						'meta_title' => 'Product Meta Title',
						'meta_description' => 'Product Meta Description',
						'meta_keyword' => 'Product Meta Keyword',
						'manufacturer' => 'Manufacturer',
						'sku' => 'SKU1', #Required
						'model' => 'MODEL1', #Required
						'price' => '1000', #Required
						'quantity' => '20',
						'shipping' => '1',
						'subtract' => '1',
						'image' => 'data/product_main_image.jpg',
						'status' => '1',
						'keyword' => 'product-name',
						'upc' => '3253454543',
						'asin' => 'ASIN34234',
						'isbn' => '989687685875',
						'ean' => '22334343',
						'weight' => '2',
						'length' => '10',
						'width' => '10',
						'height' => '10',
						'tax_class_id' => '9',
						'download_images' => '1',
						'product_image' => $product_image,
						'product_option' => $product_option,
						'product_attribute' => $product_attribute,
						'product_category' => $product_category,
					);
	
		$params['data'] = json_encode($product_data);
		$request = http_build_query($params);
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		
		$response = json_decode($response, true);
		print_r($response);
?>
