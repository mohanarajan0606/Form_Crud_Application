<?php
// Start session
session_start();

// Destroy session
session_unset();
session_destroy();

// Redirect to login page
header('Location: Login.html');
exit();
?>
