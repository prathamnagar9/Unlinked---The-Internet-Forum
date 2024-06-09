<?php
session_start();

$host = "localhost";
$db = "unlinked";
$user = "root";
$pass = "";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the email from the session
$email = $_SESSION['user']['email'];

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("SELECT username FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Set the header indicating that the content is an image
    header("Content-Type: character");

    // Output the image data
    echo $row['username'];
} else {
    echo "No username found with that email";
}

$conn->close();
?>
