<?php
session_start(); // Start the session

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Respond with a success message (you can modify this if needed)
echo 'Logged out successfully';
?>
