<?php
// Database connection
include 'ConnectionToDatabase.php'; 

// Adding a new employee report
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize input data
    $username = $_POST['Username'];
    $didReports = $_POST['Did_Reports'];
    $activityTime = $_POST['Activity_Time'];
    $plane = $_POST['Plane'];
    $improvePercentage = $_POST['Improve_Precentage'];
    $result = $_POST['Result'];
    $problems = $_POST['Problems'];
    $resolveSuggestion = $_POST['Resolve_Sugestion'];
    $date = $_POST['Date'];
    $observation = $_POST['Observation'];

    // Checking if fields are filled
    if (empty($username) || empty($didReports) || empty($activityTime) || empty($plane) || empty($improvePercentage) || empty($result) || empty($problems) || empty($resolveSuggestion) || empty($date)) {
        ?>
        <script>
            alert("لطفاً تمام فیلدها را پر کنید!");
            window.history.back(); 
        </script>
        <?php
    } else {
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO employeereport (Username, Did_Reports, Activity_Time, Plane, Improve_Precentage, Result, Problems, Resolve_Sugestion, Date, Observation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssss", $username, $didReports, $activityTime, $plane, $improvePercentage, $result, $problems, $resolveSuggestion, $date, $observation);

        if ($stmt->execute()) {
            ?>
            <script>
                alert("شما موفقانه به سیستم ثبت کردید!!!");
                window.location.href = "../dashboardpages/EmployeeReport.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("خطایی رخ داد. لطفاً دوباره تلاش کنید.");
                console.error("Error: " + "<?php echo addslashes($stmt->error); ?>"); // Log error to console for debugging
            </script>
            <?php
        }

        $stmt->close();
    }
}

// Closing the connection
$conn->close();
?>
