<?php
// Database connection
include 'ConnectionToDatabase.php';

// Fetch employee data based on the ID passed via GET parameter
$employee_id = $_GET['ID'];
$sql = "SELECT * FROM employeereport WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $employee_id);
$stmt->execute();
$result = $stmt->get_result();
$employee = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the data from the form
    $id = $_POST['ID'];
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

    // Prepare the SQL update query
    $sql = "UPDATE employeereport SET Username=?, Did_Reports=?, Activity_Time=?, Plane=?, Improve_Precentage=?, Result=?, Problems=?, Resolve_Sugestion=?, Date=?, Observation=? WHERE ID=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssi", $username, $didReports, $activityTime, $plane, $improvePercentage, $result, $problems, $resolveSuggestion, $date, $observation, $id);

    if ($stmt->execute()) {
        echo "<script>alert('گزارش موفقانه ویرایش شد!'); window.location.href = '../dashboardpages/ShowEmployeeReport.php';</script>";
    } else {
        echo "<script>alert('خطا در ویرایش گزارش: " . $stmt->error . "');</script>"; // Display error message
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گزارشدهی کارمندان</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/Employee_Report.css">

    <script>
        function closeForm() {
            window.location.href = "../index.php";
        }
    </script>

</head>
<body dir="rtl">

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2><b>فارمت گزارشدهی کارمندان</b></h2>
        <button type="button" class="btn-close" aria-label="Close" onclick="closeForm()" style="transform: rotate(180deg);"></button>
    </div>

    <form action="Update_Employee_Report.php" method="post" id="form">
        <!-- Hidden field to hold the employee ID -->
        <input type="hidden" name="ID" value="<?php echo $employee['ID']; ?>">

        <div class="form-row">
            <div class="form-col">
                <label for="UserName">نام کاربر</label>
                <input type="text" id="UserName" name="Username" class="form-control" value="<?php echo htmlspecialchars($employee['Username']); ?>">
            </div>

            <div class="form-col">
                <label for="Report">گزارش فعالیت های انجام شده</label>
                <input type="text" id="Report" name="Did_Reports" class="form-control" value="<?php echo htmlspecialchars($employee['Did_Reports']); ?>">
            </div>

            <div class="form-col">
                <label for="Time">زمان اجرای فعالیت</label>
                <input type="text" id="Time" name="Activity_Time" class="form-control" value="<?php echo htmlspecialchars($employee['Activity_Time']); ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label for="Plane">پلان</label>
                <select name="Plane" class="form-control">
                    <option value="پلان مربوطه" <?php echo $employee['Plane'] == 'پلان مربوطه' ? 'selected' : ''; ?>>پلان مربوطه</option>
                    <option value="خارج از پلان" <?php echo $employee['Plane'] == 'خارج از پلان' ? 'selected' : ''; ?>>خارج از پلان</option>
                </select>
            </div>

            <div class="form-col">
                <label for="persent">فیصدی پیشرفت</label>
                <input type="text" id="persent" name="Improve_Precentage" class="form-control" value="<?php echo htmlspecialchars($employee['Improve_Precentage']); ?>">
            </div>

            <div class="form-col">
                <label for="state">نتیجه/دستاورد</label>
                <input type="text" id="state" name="Result" class="form-control" value="<?php echo htmlspecialchars($employee['Result']); ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label for="prob">مشکلات/نواقص و کمبودات</label>
                <input type="text" id="prob" name="Problems" class="form-control" value="<?php echo htmlspecialchars($employee['Problems']); ?>">
            </div>

            <div class="form-col">
                <label for="solve">راه حل پیشنهادی</label>
                <input type="text" id="solve" name="Resolve_Sugestion" class="form-control" value="<?php echo htmlspecialchars($employee['Resolve_Sugestion']); ?>">
            </div>
            <div class="form-col">
                <label for="date">تاریخ</label>
                <input type="date" id="date" name="Date" class="form-control" value="<?php echo htmlspecialchars($employee['Date']); ?>">
            </div>
        </div>

        <div class="form-col-12 mb-3">
            <label for="signature">ملاحظات</label>
            <input type="text" id="signature" name="Observation" class="form-control" value="<?php echo htmlspecialchars($employee['Observation']); ?>">
        </div>

        <div class="form-row" style="justify-content: center;">
            <button type="submit">ویرایش گزارش</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
