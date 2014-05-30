<?php
	$url = 'http://api.kartrocket.co/index.php?route=feed/web_api/addorder&key=prabhat';

	$data['import_order_id']='1234567890';
	$data['firstname']='Albert';
	$data['lastname']='Pinto';
	$data['email']='albert.pinto@xyz.com';
	$data['company']='';
	$data['address_1']='Address Line 1';
	$data['address_2']=' Address Line 2';
	$data['city']='Shipment City';
	$data['postcode']='Shipment Postcode';
	$data['state']='Shipment State';
	$data['country_code']='IN';
	$data['telephone']='9999999999';
	$data['mobile']='9999999999';
	$data['fax']='9999999999 ';
	$data['payment_method']=' Payment Method';
	$data['payment_code']='Payment Code';
	$data['shipping_method']='Shipment Method';
	$data['shipping_code']='Shipment Code';
	$data['products'][0]['name']='Apple iPhone 4Sx';
	$data['products'][0]['model']='MB0010';
	$data['products'][0]['sku']='MB0010';
	$data['products'][0]['quantity']='1';
	$data['products'][0]['price']='145';
	$data['products'][0]['total']='145';
	$data['products'][0]['tax']='6.9047619047619';
	$data['products'][1]['name']='Apple iPhone 4C';
	$data['products'][1]['model']='MB0011';
	$data['products'][1]['sku']='MB0011';
	$data['products'][1]['quantity']='1';
	$data['products'][1]['price']='145';
	$data['products'][1]['total']='145';
	$data['products'][1]['tax']='6.9047619047619';
	$data['totals']['handling']='44';
	$data['totals']['low_order_fee']='77';
	$data['totals']['sub_total']='145';
	$data['totals']['tax']='0.0';
	$data['totals']['total']='266';
	$data['weight']='1';
	$data['comment']='';
	$data['total']='266';
	
	$params['data'] = json_encode($data);

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
