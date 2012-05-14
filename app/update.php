<?php
/**
 * Update.php
 * Updates existing tasks
 */

include "auth.php";
include "../config/database.php";

$task 			= $_POST['taskid'];
$name 			= $_POST['name'];
$description 	= $_POST['description'];
$category 		= $_POST['category'];

// Update query
$query = "UPDATE todos SET name='$name', description='$description', category='$category' WHERE id='$task' AND userid='$uid'";

// Execute and return data held in $result variable
$result = mysqli_query($connect, $query) or die ("Query execution failed.");

header("Location: ../task/index.php?task=$task");

?>