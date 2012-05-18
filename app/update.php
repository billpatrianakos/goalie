<?php
/**
 * Update.php
 * Updates existing tasks
 */

include "auth.php";
include "../config/database.php";

$task 			= $_POST['taskid'];
$name 			= mysql_real_escape_string($_POST['name']);
$description 	= mysql_real_escape_string($_POST['description']);
$category 		= mysql_real_escape_string($_POST['category']);
$due 			= mysql_real_escape_string($_POST['duedate']);

if ($_POST['minute'] == "") {
	$minute = "";
}
else {
	$minute = ":" . mysql_real_escape_string($_POST['minute']);
}

if ($_POST['hour'] == "" && $_POST['minute'] != "") {
	$duetime = "";
}
else {
	$duetime = mysql_real_escape_string($_POST['hour']) . $minute . mysql_real_escape_string($_POST['ampm']);
}

// Update query
$query = "UPDATE todos SET name='$name', description='$description', category='$category', due='$due', time='$duetime' WHERE id='$task' AND userid='$uid'";

// Execute and return data held in $result variable
$result = mysqli_query($connect, $query) or die ("Query execution failed.");

header("Location: ../task/index.php?task=$task");

?>