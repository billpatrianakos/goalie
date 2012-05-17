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
			$due 			= $todo['due'];
			$duetime 		= $todo['time'];

			$formid 		= str_replace(" ", "", $name);

			if ($duetime == "") {
				$time = "";
			}
			else {
				$time = "@" . $duetime;
			}

			echo "
			<li>
				<form method='post' name='$formid' action='../app/complete.php' onclick=\"document.forms['$formid'].submit()\">
					<input type='checkbox' name='task' value='$id' /> 
					<a href='../task/index.php?task=$id'>$name <span class='right'><i class='icon-chevron-right icon-large'></i></span></a>
				</form>
				&nbsp;&nbsp;&nbsp;&nbsp; <small>$due $time</small>
			</li>
			";
		}
	}
	else {
		echo "<li>Looks like there's nothing to do. Nice.</li>";
	}
}
?>