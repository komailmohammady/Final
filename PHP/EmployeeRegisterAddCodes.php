<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['Name'];
    $lastName = $_POST['Last_Name'];
    $fatherName = $_POST['F_Name'];
    $user = $_POST['user'];
    $password = $_POST['Password'];
    $confirmPassword = $_POST['Conform_Password'];
    $postType = $_POST['Post_type'];
    $jobType = $_POST['Job_type'];
    $postNo = $_POST['Post_No'];
    $relevantDepartment = $_POST['Relevant_Department'];
    $observation = $_POST['Observation'];


    // Database connection
    include 'ConnectionToDatabase.php'; 

    // Insert Query
    $sql = "INSERT INTO register_form (id, Name, Last_Name, F_Name, user, password, Post_Type, Job_type, Post_No, Relevant_Department, Observation)
            VALUES ('$id', '$name', '$lastName', '$fatherName', '$user', '$password', '$postType', '$jobType', '$postNo', '$relevantDepartment', '$observation')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert">A simple success alert—check it out!</div>';
        echo '<script>window.history.back();</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
