<?php
	mysql_connect("localhost", "root", "tz");
	mysql_select_db('php_ajax');
	$sql = "SELECT * FROM products";
	$result = mysql_query($sql);
	$products_arr = array();



	while($arr_object = mysql_fetch_object($result)) {
		$products_arr[] = $arr_object;
		}
		$json_products = '{"products":'.json_encode($products_arr).'}';
		echo $json_products;
?>
