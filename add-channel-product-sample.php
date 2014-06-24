<?php

	$url = 'http://api.kartrocket.co/index.php?route=feed/web_api/addchannelproduct&key=API';

	$channel_product_data = array(
						'channel_id' => '1', #Required
						'kartrocket_product_id' => '139', #Required Either kartrocket_product_id or kartrocket_product_sku
						'kartrocket_product_sku' => 'ID00001', #Required Either kartrocket_product_id or kartrocket_product_sku
						'channel_product_sku' => 'XYZXDEDKED', #Required
					);

	$params['data'] = json_encode($channel_product_data);

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
