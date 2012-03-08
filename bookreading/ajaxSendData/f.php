<?php
	
	
			mysql_connect("localhost", "root", "tz");
			mysql_select_db("efatha");
			$result = mysql_query("SELECT * FROM members WHERE surname = '{$_GET['surname']}' LIMIT 1");
			if(mysql_num_rows($result) > 0) {
				$result_set = mysql_fetch_assoc($result);
				echo "<strong>".$result_set['surname']."</strong> was found in our database.<br />";
				echo "Your first name in our database is ".$result_set['first_name']."<br />";
			} else {
				echo "<strong>".$_GET['surname']."</strong> was not found in our database <br />";
				}
		
?>
