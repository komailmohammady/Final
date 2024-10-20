<?php
session_start(); // Start the session

// Database configuration
$servername = "localhost"; // Server name
$username = "root";        // Database username
$password = "";            // Database password
$dbname = "final";         // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $user_name = $_POST['username'];
    $activity_report = $_POST['did_reports'];
    $execution_time = $_POST['activity_time'];
    $operational_plan = $_POST['plan'];
    $progress_percentage = $_POST['improve_precentage'];
    $result_achievement = $_POST['result'];
    $problems_deficiencies = $_POST['problems'];
    $proposed_solution = $_POST['resolve_sugestion'];
    $observations = $_POST['observition'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO imployee_reports (username, did_reports, activity_time, plan, improve_precentage, result, problems, resolve_sugestion, observition) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $user_name, $activity_report, $execution_time, $operational_plan, $progress_percentage, $result_achievement, $problems_deficiencies, $proposed_solution, $observations);

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "گزارش موفقانه ذخیره گردید"; // Set session variable
        header("Location: success_page.php"); // Redirect to the success page
        exit();
    } else {
        echo "خطا در ثبت گزارش: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reports</title>
    <link rel="stylesheet" href="../css/Employee_Report.css">
</head>
<body>
    <form action="" method="post" id="form">
        <div class="form-row">
            <div class="form-col">
                <label for="UserName">نام کاربر</label>
                <input type="text" id="UserName" name="username" class="form-control">
            </div>
            <div class="form-col">
                <label for="Report">گزارش فعالیت های انجام شده</label>
                <input type="text" id="Report" name="did_reports" class="form-control">
            </div>
            <div class="form-col">
                <label for="Time">زمان اجرای فعالیت</label>
                <input type="text" id="Time" name="activity_time" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label for="Plane">مربوط پلان عملیاتی/خارج از پلان</label>
                <input type="text" id="Plane" name="plan" class="form-control">
            </div>
            <div class="form-col">
                <label for="persent">فیصدی پیشرفت</label>
                <input type="text" id="persent" name="improve_precentage" class="form-control">
            </div>
            <div class="form-col">
                <label for="state">نتیجه/دستاورد</label>
                <input type="text" id="state" name="result" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label for="prob">مشکلات/نواقص و کمبودات</label>
                <input type="text" id="prob" name="problems" class="form-control">
            </div>
            <div class="form-col">
                <label for="solve">راه حل پیشنهادی</label>
                <input type="text" id="solve" name="resolve_sugestion" class="form-control">
            </div>
            <div class="form-col">
                <label for="signature">ملاحظات</label>
                <input type="text" id="signature" name="observition" class="form-control">
            </div>
        </div>
        <div class="form-row" style="justify-content: center;">
            <button type="submit">ثبت گزارشات</button>
        </div>
    </form>
</body>
</html>