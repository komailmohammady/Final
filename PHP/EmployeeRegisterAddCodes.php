<?php
// Establish a database connection
$servername = "localhost";  // Replace with your server name
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "finalproject";    // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get the form data
    $id = $_POST['id'];
    $name = $_POST['Name'];
    $last_name = $_POST['Last_Name'];
    $father_name = $_POST['F_Name'];
    $username = $_POST['user'];
    $password = $_POST['Password'];
    $confirm_password = $_POST['Conform_Password'];
    $post_type = $_POST['Post_type'];
    $job_type = $_POST['Job_type'];
    $post_no = $_POST['Post_No'];
    $relevant_department = $_POST['Relevant_Department'];
    $observation = $_POST['Observation'];

    // Validate form data (e.g., checking if passwords match)
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

    // Hash the password before inserting it into the database for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind the SQL statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO register_form (id, Name, Last_Name, F_Name, user, Password, Post_type, Job_type, Post_No, Relevant_Department, Observation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssssssss", $id, $name, $last_name, $father_name, $username, $hashed_password, $post_type, $job_type, $post_no, $relevant_department, $observation);

    // Execute the query
    if ($stmt->execute()) {
        echo "New employee registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
