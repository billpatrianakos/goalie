<?php

include "auth.php";
include "../config/database.php";

$task = $_POST['task'];

// Set up a simple delete query but add extra params so people can't delete other people's stuff
$query = "DELETE FROM todos WHERE userid='$uid' AND id='$task'";

// Execute and return data held in $result variable
$result = mysqli_query($connect, $query) or die ("Query execution failed");

header("Location: ../do_it");

?>