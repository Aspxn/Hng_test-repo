<?php
require "connect.inc.php";

$sql = "SELECT `food`, `calories` FROM `food` ORDER BY `id`";

if ($query_run = $conn->query($sql)){
	while ($query_row = mysql_fetch_assoc($query_run)){
		$food = $query_row['food'];
		$calories = $query_row['calories'];

		echo $food. 'has ' .$calories. 'calories<br>';
	}
}else{
	echo "Query failed";
}

?>