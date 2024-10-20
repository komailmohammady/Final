<?php
// Start a session for error/success messages
session_start();

// Include database configuration (assuming you have a db connection file)
include 'Redb_config.php'; // Update the path accordingly

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Capture form data
    $id = trim($_POST['ID']);
    $firstName = trim($_POST['Name']);
    $lastName = trim($_POST['Last_Name']);
    $fatherName = trim($_POST['F_Name']);
    $username = trim($_POST['User']);
    $password = $_POST['Password'];
    $confirmPassword = $_POST['Conform_password'];
    $jobTitle = trim($_POST['Post_Type']);
    $jobType = trim($_POST['Job_Type ']);
    $observations = trim($_POST['Post_No']);
    $directorate = $_POST['Observation'];

    // Validate form inputs (Basic validation)
    if (empty($id) || empty($firstName) || empty($lastName) || empty($username) || empty($password) || empty($confirmPassword)) {
        $_SESSION['error'] = "تمامی فیلدهای اجباری باید پر شوند.";
        header("Location: form.php"); // Redirect back to the form
        exit();
    }

    if ($password !== $confirmPassword) {
        $_SESSION['error'] = "رمز عبور و تایید رمز عبور باید مطابقت داشته باشند.";
        header("Location: form.php");
        exit();
    }

    // Hash the password before storing
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind (Using prepared statements to prevent SQL injection)
    $stmt = $conn->prepare("INSERT INTO employees (id, first_name, last_name, father_name, username, password, job_title, job_type, directorate, observations) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $id, $firstName, $lastName, $fatherName, $username, $hashedPassword, $jobTitle, $jobType, $directorate, $observations);

    // Execute and check if the insertion was successful
    if ($stmt->execute()) {
        $_SESSION['success'] = "کارمند با موفقیت ثبت شد.";
        header("Location: success.php"); // Redirect to a success page
    } else {
        $_SESSION['error'] = "خطایی رخ داد. لطفا دوباره تلاش کنید.";
        header("Location: form.php");
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>