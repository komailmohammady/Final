<?php
// Database connection
include '../PHP/ConnectionToDatabase.php';

// Fetch all employee records from the database
$sql = "SELECT * FROM employeereport";
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
                    echo "<tr><td colspan='10'>هیچ اطلاعاتی موجود نیست</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
