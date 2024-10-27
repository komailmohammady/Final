<?php
// Database connection
include '../PHP/ConnectionToDatabase.php';

// Initialize date variables
$startDate = '';
$endDate = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    
    // Fetch records between the specified dates
    $sql = "SELECT * FROM employeereport WHERE Date BETWEEN '$startDate' AND '$endDate'";
} else {
    // Fetch all employee records from the database
    $sql = "SELECT * FROM employeereport";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جدول کارمندان</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="../css/kamadatepicker.min.css">
    <style>
        * {
            font-family: 'B Nazanin';
        }
        .table-custom {
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin: 0; /* Reduced margin */
        }
        .table-custom th {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
        .table-custom td {
            text-align: center;
        }
        .table-custom .btn {
            margin: 1px;
        }
        .table-responsive {
            margin: 0; /* Reduced margin for the container */
        }
    </style>
</head>
<body dir="rtl">
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-4"><b>فارمت گزارشدهی کارمندان</b></h2>
        <button type="button" class="btn-close" aria-label="Close" onclick="closeForm()" style="transform: rotate(180deg);"></button>
    </div>

    <!-- Search form -->
    <form method="post" class="mb-4">
        <div class="row">
            <div class="col-md-5">
                <label for="start_date" class="form-label">تاریخ شروع:</label>
                <input type="text" id="start_date" name="start_date" class="form-control" value="<?php echo htmlspecialchars($startDate); ?>" required>
            </div>
            <div class="col-md-5">
                <label for="end_date" class="form-label">تاریخ پایان:</label>
                <input type="text" id="end_date" name="end_date" class="form-control" value="<?php echo htmlspecialchars($endDate); ?>" required>
            </div>
            <div class="col-md-2">
                <label class="form-label" style="visibility: hidden;">Search</label>
                <button type="submit" class="btn btn-primary w-100">جستجو</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-custom">
            <thead>
                <tr>
                    <th>نام کاربر</th>
                    <th>گزارش فعالیت های انجام شده</th>
                    <th>زمان اجرای فعالیت</th>
                    <th>پلان</th>
                    <th>فیصدی پیشرفت</th>
                    <th>نتیجه/دستاورد</th>
                    <th>مشکلات/نواقص و کمبودات</th>
                    <th>راه حل پیشنهادی</th>
                    <th>تاریخ</th>
                    <th>ملاحظات</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row['Username'] . "</td>
                            <td>" . $row['Did_Reports'] . "</td>
                            <td>" . $row['Activity_Time'] . "</td>
                            <td>" . $row['Plane'] . "</td>
                            <td>" . $row['Improve_Precentage'] . "</td>
                            <td>" . $row['Result'] . "</td>
                            <td>" . $row['Problems'] . "</td>
                            <td>" . $row['Resolve_Sugestion'] . "</td>
                            <td>" . $row['Date'] . "</td>
                            <td>" . $row['Observation'] . "</td>
                            <td>
                                <a href='../PHP/Update_Employee_Report.php?ID=" . $row['ID'] . "' class='btn btn-warning btn-sm'>ویرایش</a>
                                <a href='../PHP/delete_Employee_Report.php?ID=" . $row['ID'] . "' class='btn btn-danger btn-sm'>حذف</a>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='11'>هیچ اطلاعاتی موجود نیست</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/assits/jquery.js"></script>
<script src="../js/assits/kamadatepicker.min.js"></script>
<script>
    // Initialize KamaDatepicker for start_date
    let options = {
        placeholder: "تاریخ",
        twodigit: false,
        closeAfterSelect: false,
        nextButtonIcon : "../img/timeir_next.png",
        previousButtonIcon : "../img/timeir_prev.png",
        buttonsColor: "blue",
        forceFarsiDigits: true,
        markToday: true,
        markHolidays: true,
        sync: true,
        gotoToday: true
    };

    // Apply the date picker to both input fields
    kamaDatepicker('start_date', options);
    kamaDatepicker('end_date', options);
</script>
</body>
</html>
