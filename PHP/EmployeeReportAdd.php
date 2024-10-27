<?php
session_start();
include 'ConnectionToDatabase.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize input data
    $didReports = trim($_POST['Did_Reports']);
    $activityTime = trim($_POST['Activity_Time']);
    $plane = trim($_POST['Plane']);
    $improvePercentage = trim($_POST['Improve_Precentage']);
    $result = trim($_POST['Result']);
    $problems = trim($_POST['Problems']);
    $resolveSuggestion = trim($_POST['Resolve_Sugestion']);
    $date = trim($_POST['Date']);
    $observation = trim($_POST['Observation']);

    // Fetch username from session
    $username = $_SESSION['username'];

    // Fetch the user ID from the database
    $stmt = $conn->prepare("SELECT ID FROM employee_register WHERE Username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($uid);
    $stmt->fetch();
    $stmt->close();

    // Check if fields are filled
    if (empty($uid) || empty($didReports) || empty($activityTime) || empty($plane) || empty($improvePercentage) || empty($result) || empty($problems) || empty($resolveSuggestion) || empty($date)) {
        echo "<script>
                alert('لطفاً تمام فیلدها را پر کنید!');
                window.history.back(); 
              </script>";
        exit;
    } else {
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO employeereport (ID, username, Did_Reports, Activity_Time, Plane, Improve_Precentage, Result, Problems, Resolve_Sugestion, Date, Observation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        // Bind parameters
        $stmt->bind_param("sssssssssss", $uid, $username, $didReports, $activityTime, $plane, $improvePercentage, $result, $problems, $resolveSuggestion, $date, $observation);

        if ($stmt->execute()) {
            // Redirect to ShowEmployeeReport after successful insert
            header("Location: ../dashboardpages/ShowEmployeeReport.php");
            exit();
        } else {
            // Log error for debugging
            error_log("Database insert error: " . $stmt->error);
            echo "<script>
                    alert('خطایی رخ داد. لطفاً دوباره تلاش کنید.');
                  </script>";
        }

        $stmt->close();
    }
}

$conn->close();
?>
