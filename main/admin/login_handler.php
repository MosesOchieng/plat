<?php
 header("Refresh: 5; URL= dashboard/index.php"); 

// Include the database connection file
require_once 'connection.php';

// Check if the login button was clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    // Initialize variables
    $mail = $password = "";

    // Get input data
    $username= trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Prepare a select statement
    $sql = "SELECT * FROM owners WHERE username = '$username'";

    // Execute the select statement
    $result = $conn->query($sql);

    // Check if the user exists in the database
    if ($result->num_rows == 1) {

        // Fetch the row from the result set
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Login successful
            echo "Login successful";

            // Redirect to the dashboard page
            header("location: ../dashboard/index.php");
            exit;
        } else {
            // Incorrect password
            echo "Incorrect password";
        }
    } else {
        // User does not exist
        echo "Welcome to Place Ya Mat.";
    }
}

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Close connection
$conn->close();
?>