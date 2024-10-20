<?php
include 'connect.php';

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Check if the form was submitted
    // Capture form data
    $report = $_POST['employee_name'];
    $time = $_POST['did_reports'];
    $plane = $_POST['activity_time'];
    $persent = $_POST['improve_precentage']; // This should be for the percentage
    $result = $_POST['result'];
    $prob = $_POST['problems'];
    $solve = $_POST['resolve_sugestion'];
    $signature = $_POST['observition'];

    // Prepare the SQL query
    $query = "INSERT INTO imployee_reports (
        employee_name,
        did_reports,
        activity_time,
        plan,
        improve_precentage,
        result,
        problems,
        resolve_sugestion,
        observition
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Using prepared statements to prevent SQL injection
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssss", $report, $time, $plane, $persent, $result, $prob, $solve, $solver, $signature);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script type='text/javascript'>
            alert('Registration Successful....You may login now');
            window.location.href = 'Employee_Report.php';
        </script>";
    } else {
        echo "Error: " . $stmt->error; // Show error message if query fails
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
