<?php
// Get the user's input
$text = $_GET['text'];

// Set the default response
$response = "CON Welcome to my USSD app.\n";
$response .= "Please enter your name and age, separated by a comma.";

// If the user has entered their name and age, process their input
if ($text != "") {
    // Split the input into name and age
    $input = explode(",", $text);
    $name = trim($input[0]);
    $age = trim($input[1]);

    // Check if the input is valid
    if ($name == "" || $age == "") {
        $response = "CON Invalid input. Please enter your name and age, separated by a comma.";
    } else {
        // Process the input and create the response
        $response = "END Thank you, $name. Your age is $age.";
    }
}

// Print the response
header('Content-type: text/plain');
echo $response;
?>
