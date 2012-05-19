<?php
include "auth.php";
include "../config/database.php";

$name 			= $_POST['name'];
$description 	= $_POST['description']);
$category 		= $_POST['category']);
$due 			= $_POST['duedate'];

if ($_POST['minute'] == "") {
	$minute = "";
}
else {
	$minute = ":" . $_POST['minute'];
}

if ($_POST['hour'] == "" && $_POST['minute'] != "") {
	$duetime = "";
}
else {
	$duetime = $_POST['hour'] . $minute . $_POST['ampm'];
}

$query = "INSERT INTO todos (userid, name, description, category, due, time) VALUES('$uid', '$name', '$description', '$category', '$due', '$duetime')";
$result = mysqli_query($connect, $query) or die ("Query failed");
$count = mysqli_num_rows($result);

header("Location: ../do_it/");
?>