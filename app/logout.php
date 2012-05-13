<?php
/**
 * Logout script
 */

# Set cookies
setcookie('goalie', 'set', time()-604800, '/');
setcookie('user', $username, time()-604800, '/');
setcookie('password', $password, time()-604800, '/');
setcookie('uid', $uid, time()-604800, '/');
header("Location: ../index.php");

?>