<?php
session_start();
<<<<<<< HEAD

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login.php
=======
$_SESSION = array();
session_destroy();
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
header("Location: ../login.php");
exit;
?>
