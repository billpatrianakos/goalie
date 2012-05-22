<?php
/**
 * List functions
 * Pulls list items from all categories into view
 * AND
 * Pulls all projects into list
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

			# Remove special characters from '$formid' and make sure it is an alpha-numeric string
			# Special chars and ints interfere with the JS that submits the form on checking the checkbox
			$formid 		= "a" . str_replace(array(" ", "'", '"', ".", "!", ","), "", $name);

			if ($duetime == "") {
				$time = "";
			}
			else {
				$time = "@" . " " . $duetime;
			}

			echo "
			<li>
				<form method='post' name='$formid' action='../app/complete.php' onclick=\"document.forms['$formid'].submit()\">
					<input type='checkbox' name='task' value='$id' /> 
					<a href='../task/index.php?task=$id'>$name <span class='view-arrow'><i class='icon-chevron-right icon-large'></i></span></a>
					<br />
					&nbsp;&nbsp;&nbsp;&nbsp; <small>$due $time</small>
				</form>
			</li>
			";
		}
	}
	else {
		echo "<li>Looks like there's nothing to do. Nice.</li>";
	}
}
/*
function fetch_project_list() {

	# Fetches a list of all projects

}

function fetch_project_tasks() {
	
	# Gets the list of project todosto display on the do_it page

}
*/
?>