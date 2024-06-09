<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $dbname = "unlinked";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare data for validation
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to fetch user data based on email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result === false) {
        // Query failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    } else {
        if ($result->num_rows > 0) {
            // User found, verify password
            $user = $result->fetch_assoc();
            $db_password = $user['password'];

            if ($password === $db_password) { // Direct comparison for plaintext passwords
                // Password is correct, store user data in session
                $_SESSION['user'] = $user;
                
                // Redirect to dashboard or desired page
                header("Location: index - user.php");
                exit();
            } else {
                // Incorrect password
                echo "Incorrect password.";
            }
        } else {
            // User not found
            echo "User not found.";
        }
    }

    // Close the database connection
    $conn->close();
}

?>