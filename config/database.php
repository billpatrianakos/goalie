<?php

// CONNECTION VARIABLES
$host="localhost";
$dbuser="test";
$dbpassword="password";
$database="goalie";
$connect=mysqli_connect($host,$dbuser,$dbpassword,$database) or die ("Could not connect to database.");
?>