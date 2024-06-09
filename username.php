<?php
// Start session at the very beginning
//session_start();

// Rest of your code
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    if (!isset($user['username']) || empty($user['username'])) {
        $username = "Guest";
    } else {
        $username = htmlspecialchars($user['username']);
    }
} else {
    $username = "Guest";
}

// Output the username directly to the page
echo $username;

?>