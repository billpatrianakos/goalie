<?php
include "../config/database.php";

$username = $_POST['user'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE user='$username' AND password='$password'";
$result = mysqli_query($connect, $query) or die ("Failed to sign you in");
$count = mysqli_num_rows($result);

if ($count == 1) {
	$user = mysqli_fetch_assoc($result);
	$uid 		= $user['id'];
	$username 	= $user['user'];
	$password 	= $user['password'];

	# Set cookies
	setcookie('goalie', 'set', time()+604800, '/');
	setcookie('user', $username, time()+604800, '/');
	setcookie('password', $password, time()+604800, '/');
	setcookie('uid', $uid, time()+604800, '/');
	header("Location: ../do_it/index.php");
}
else {
	echo "Could not sign you in";
}
?>