<?php
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

    // Prepare data for insertion
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Handle file upload for profile picture
    $profilePictureTmp = $_FILES['profile_picture']['tmp_name']; // Temporary location of the uploaded file

    // Read the image data from the uploaded file
    $profilePictureData = file_get_contents($profilePictureTmp);

    // Prepare an SQL statement for inserting the data
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, profile_picture_url) VALUES (?, ?, ?, ?)");
    $null = NULL;
    $stmt->bind_param("sssb", $username, $email, $password, $null);

    // Send the image data
    $stmt->send_long_data(3, $profilePictureData);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to login page upon successful signup
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $conn->close();
}
?>
