<?php
include "auth.php";
include "../config/database.php";

$name 			= $_POST['name'];
$description 	= $_POST['description'];
$category 		= $_POST['category'];

$query = "INSERT INTO todos (userid, name, description, category) VALUES('$uid', '$name', '$description', '$category')";
$result = mysqli_query($connect, $query) or die ("Query failed");
$count = mysqli_num_rows($result);

header("Location: ../do_it/");
?>