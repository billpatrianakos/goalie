<?php

	if ($_COOKIE['goalie'] == 'set') {

		$username		= $_COOKIE['user'];
		$password 		= $_COOKIE['password'];
		$loggedin 		= $_COOKIE['goalie'];
		$uid 			= $_COOKIE['uid'];

	}
	else {
		header("Location: ../index.php");
	}


?>