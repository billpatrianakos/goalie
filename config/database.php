<?php

// CONNECTION VARIABLES
$host="localhost";
$dbuser="test";
$password="password";
$database="goalie";
$connect=mysqli_connect($host,$dbuser,$password,$database) or die ("Could not connect to database.");
