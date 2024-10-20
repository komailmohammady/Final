<?php
// Initialize error variables for each field
$IDError = $NameError = $LastNameError = $FNameError = $UserError = $PasswordError = $ConfirmPasswordError = $PostTypeError = $JobTypeError = $PostNoError = $DepartmentError = "";

// Process the form when it is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Flag to track validation success
    $isValid = true;

    // Sanitize input data and validate each field
    $ID = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_NUMBER_INT);
    $Name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_STRING);
    $Last_Name = filter_input(INPUT_POST, 'Last_Name', FILTER_SANITIZE_STRING);
    $F_Name = filter_input(INPUT_POST, 'F_Name', FILTER_SANITIZE_STRING);
    $User = filter_input(INPUT_POST, 'User', FILTER_SANITIZE_STRING);
    $Password = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);
    $Conform_Password = filter_input(INPUT_POST, 'Conform_Password', FILTER_SANITIZE_STRING);
    $Post_type = filter_input(INPUT_POST, 'Post_type', FILTER_SANITIZE_STRING);
    $Job_type = filter_input(INPUT_POST, 'Job_type', FILTER_SANITIZE_STRING);
    $Post_No = filter_input(INPUT_POST, 'Post_No', FILTER_SANITIZE_STRING);
    $Relevant_Department = filter_input(INPUT_POST, 'Relevant_Department', FILTER_SANITIZE_STRING);
    $Observation = filter_input(INPUT_POST, 'Observation', FILTER_SANITIZE_STRING);

    // Validate ID
    if (empty($ID) || !filter_var($ID, FILTER_VALIDATE_INT)) {
        $IDError = "آی دی ضروری هست باید آنرا وارد نمایید!";
        $isValid = false;
    }

    // Validate Name
    if (empty($Name)) {
        $NameError = "اسم الزامی است";
        $isValid = false;
    }

    // Validate Last Name
    if (empty($Last_Name)) {
        $LastNameError = "تخلص تان الزامی است";
        $isValid = false;
    }

    // Validate Father's Name
    if (empty($F_Name)) {
        $FNameError = "اسم والد الزامی است";
        $isValid = false;
    }

    // Validate Username
    if (empty($User)) {
        $UserError = "Username is required.";
        $isValid = false;
    }

    // Validate Password
    if (empty($Password) || strlen($Password) < 8) {
        $PasswordError = "Password must be at least 8 characters long.";
        $isValid = false;
    }

    // Validate Confirm Password
    if ($Password !== $Conform_Password) {
        $ConfirmPasswordError = "Passwords do not match.";
        $isValid = false;
    }

    // Validate Post Type
    if (empty($Post_type)) {
        $PostTypeError = "Post Type is required.";
        $isValid = false;
    }

    // Validate Job Type
    if (empty($Job_type)) {
        $JobTypeError = "Job Type is required.";
        $isValid = false;
    }

    // Validate Post No
    if (empty($Post_No)) {
        $PostNoError = "Please select a valid Post.";
        $isValid = false;
    }

    // Validate Department
    if (empty($Relevant_Department)) {
        $DepartmentError = "Please select a valid Department.";
        $isValid = false;
    }

    // If all fields are valid, insert into the database or display success
    if ($isValid) {
        // Insert into the database (Database connection assumed)
        // $stmt = $conn->prepare(...);

        echo "Registration successful!";
    }
}
?>
