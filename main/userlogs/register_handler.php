<?php
// Include the database connection file
require_once 'connection.php';

// Check if the signup button was clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {

    // Initialize variables
    $username = $email = $password = "";

    // Get input data
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare an insert statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");
    

    // Execute the insert statement
    if ($stmt->execute()) {
        echo "Registration successful";
        // Redirect to the login page
        header("location: login.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
