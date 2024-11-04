<?php
include 'PHP/ConnectionToDatabase.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = $_POST['message'];

    if (!empty($message)) {
        // Prepare the SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO messages (message) VALUES (?)");
        $stmt->bind_param("s", $message);
        
        // Execute the statement
        if ($stmt->execute()) {
            // Redirect back to index.php
            header("Location: index.php"); // Adjusted to your dashboard page
            exit; // Ensure no further code is executed
        } else {
            echo "Error: " . $stmt->error; // Optional: Handle error
        }

        $stmt->close(); // Close the statement
    } else {
        echo "Message cannot be empty."; // Optional: Handle empty message
    }
}

$conn->close(); // Close the database connection
?>
