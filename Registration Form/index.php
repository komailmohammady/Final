<?php
// Database connection details
$servername = "localhost"; // Replace with your database server
$username = "root";        // Replace with your MySQL username
$password = "";            // Replace with your MySQL password
$dbname = "registration_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $user_id = $_POST['user_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $father_name = $_POST['father_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmPassword'];
    $job_title = $_POST['job_title'];
    $job_grade = $_POST['job_grade'];
    $related_office = $_POST['related_office'];
    $job_type = $_POST['job_type'];
    $notes = $_POST['notes'];

    // Validate passwords
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL to check if the username exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        die("Username already exists.");
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO users (user_id, first_name, last_name, father_name, username, password, job_title, job_grade, related_office, job_type, notes) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssssssss", $user_id, $first_name, $last_name, $father_name, $username, $hashed_password, $job_title, $job_grade, $related_office, $job_type, $notes);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

   



    
    
    <div class="registration-container">
        <form id="registrationForm" action="register.php" method="POST">
            <div class="Header">
                <h2>فورم راجستر</h2>
            </div>
            <div class="content">
                <div class="first">
                    <label for="name">ID</label>
                    <br>
                    <input type="number" required>
                </div>
                <div class="second">
                    <label for="name">اسم</label>
                    <br>
                    <input type="text" required placeholder="اسم تان را وارد نمایید">
                </div>
                <div class="thired">
                    <label for="name">تخلص</label>
                    <br>
                    <input type="text">
                </div>
                <div class="first">
                    <label for="name">ولد</label>
                    <br>
                    <input type="text">
                </div>
            </div>
            <div class="content">
                <div class="first">
                    <label for="name">کاربر</label>
                    <br>
                    <input type="text" required>
                </div>
                <div class="second">
                    <label for="password">رمز عبور</label>
                    <br>
                    <input type="password" name="Password">
                </div>
                <div class="thired">
                    <label for="confirmPassword">تایید رمز عبور</label>
                    <br>
                    <input type="password" name="confirmPassword">
                </div>
                <div class="thired">
                    <label for="name">عنوان بست</label>
                    <br>
                    <input type="text">
                </div>
            </div>
            <div class="content">
                <div class="thired">
                    <label for="name">بست</label>
                    <br>
                    <select name="" id="">
                        <option value="">بست اول</option>
                        <option value="">بست دوم</option>
                        <option value="">بست سوم</option>
                        <option value="">بست چهارم</option>
                        <option value="">بست پنجم</option>
                    </select>
                    
                </div>
                <div class="first">
                    <label for="name">آمریت مربوطه</label>
                    <br>
                    <select name="" id="">
                        <option value="">آمریت امور مکاتب</option>
                        <option value="">آمریت نتایج</option>
                        <option value="">آمریت تعلیمات خاص</option>
                        <option value="">آمریت امور تنظیم لیلیه ها</option>
                    </select>
                </div>
                <div class="second">
                    <label for="name">نوعیت وظیفه</label>
                    <br>
                    <input type="text">
                </div>
                <div class="thired">
                    <label for="name">ملاحضات</label>
                    <br>
                   <textarea name="" id=""></textarea>
                </div>
            </div>
            <div class="btn">
                <button class="btn1" value="submit">راجستر</button>
            </div>

        </form>
        </div>
          
           

    <!-- Include JavaScript validation script -->
    <script src="script.js"></script>
</body>
</html>
