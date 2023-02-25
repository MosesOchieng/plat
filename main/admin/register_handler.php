<?php
header( "refresh:5;url= index.php" );
// Include the database connection file
require_once 'connection.php';

// Check if the signup button was clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {

    // Initialize variables
    $username = $password = $email = "";

    // Get input data
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare an insert statement
    $sql = "INSERT INTO owners (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

error_reporting(E_ALL);
ini_set('display_errors', 1);
}
// Close connection
$conn->close();
?>
