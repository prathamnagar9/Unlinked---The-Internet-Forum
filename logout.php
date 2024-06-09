<?php
session_start();

// Check if the user clicked on logout
if(isset($_GET['logout'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to index.html
    header("Location: index.html");
    exit;
}
?>
