<?php
//  start the session
session_start();


// Check if the user is logged in
if (!isset($_SESSION['user_email'])) {
    // Redirect to login page if the session does not exist
    header('Location: Login.html');
    exit();
}

?>