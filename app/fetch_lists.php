<?php
/**
 * List functions
 * Pulls list items from all categories into view
 */

function fetch_list($which_list) {
	include "../config/database.php";
	include "auth.php";
	$query = "SELECT * FROM todos WHERE userid='$uid' AND category='$which_list'";
	$result = mysqli_query($connect, $query) or die ("Query failed");
	$count = mysqli_num_rows($result);

	if ($count >= 1) {
		while ($todo = mysqli_fetch_assoc($result)) {
			$id 			= $todo['id'];
			$name			= $todo['name'];
			$description 	= $todo['description'];

			echo "<li>$name</li>";
		}
	}
	else {
		echo "<li>Looks like there's nothing to do. Nice.</li>";
	}
}
?>