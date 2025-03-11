<?php
session_start(); // Start the session

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Respond with a success message (you can modify this if needed)
// Redirect to the login page
header("Location: login.php"); // Redirect to login page
exit(); // Make sure no further code is executed
?>
