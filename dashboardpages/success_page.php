<?php
session_start(); // Start the session

// Check if the success message is set
if (isset($_SESSION['success_message'])) {
    echo $_SESSION['success_message']; // Display the message
    unset($_SESSION['success_message']); // Clear the message after displaying
} else {
    echo "No message to display.";
}
?>
