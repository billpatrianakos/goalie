<?php

include('../config/database.php');

$username = $_POST['user'];
$password = $_POST['password'];

// Check for taken username
$query = "SELECT user FROM user WHERE user='$username'";
$result = mysqli_query($connect, $query) or die ("Failed to validate against database");
$count = mysqli_num_rows($result);

if($count == 1) {
	header("Location: ../index.php?err=exists");
}
else {
	$query = "INSERT INTO user (user, password) VALUES ('$username', '$password')";
	$result = mysqli_query($connect, $query) or die ("Query failed");
	$count = mysqli_num_rows($result);

	$query = "SELECT * FROM user WHERE user='$username' AND password='$password'";
	$result = mysqli_query($connect, $query) or die ("Failed to sign you in");
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		$user = mysqli_fetch_assoc($result);
		$username 	= $user['user'];
		header("Location: ../do_it/");
	}
	else {
		echo "Could not sign you in";
	}
}