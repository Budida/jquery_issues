
	<?php 
		mysql_connect("localhost", "root", "tz");
		mysql_select_db('efatha');
		$sql = "SELECT * FROM members";
		$result = mysql_query($sql);
		$arr_data = array();
		while($arr = mysql_fetch_object($result)) {
			$arr_data[] = $arr;
			}
		$json = "{\"members\": ".json_encode($arr_data)."}";
		print_r($json);
	?>

