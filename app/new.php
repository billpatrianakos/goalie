<?php
include "auth.php";
include "../config/database.php";

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

$query = "INSERT INTO todos (userid, name, description, category, due, time) VALUES('$uid', '$name', '$description', '$category', '$due', '$duetime')";
$result = mysqli_query($connect, $query) or die ("Query failed");
$count = mysqli_num_rows($result);

header("Location: ../do_it/");
?>