<?php
/**
 * Get task details
 * Pulls list items from all categories into view
 */

include "../config/database.php";
include "auth.php";

$task = $_GET['task'];

$query = "SELECT * FROM todos WHERE id='$task' AND userid='$uid'";
$result = mysqli_query($connect, $query) or die ("Query failed");
$count = mysqli_num_rows($result);

if ($count == 1) {
	$todo = mysqli_fetch_assoc($result));
		$id 			= $todo['id'];
		$name			= $todo['name'];
		$description 	= $todo['description'];
		$category 		= $todo['category'];
		
}
else {
	$name = "No task found";
	$id = "0";
	$description = "An error occurred or this task no longer exists. If you believe this is an error please Tweet at us (@ChooseClever)";
	$category = "Error";
}
?>