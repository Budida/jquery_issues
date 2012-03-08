<?php
	mysql_connect("localhost", "root", "tz");
	mysql_select_db("efatha");
	$result = mysql_query("SELECT * FROM members");
	$count = 1;
	echo "Members<br />";
	while($result_set = mysql_fetch_array($result)) {
		echo $count." ".$result_set['surname']. "<br />";
		$count++;
		}
?>
