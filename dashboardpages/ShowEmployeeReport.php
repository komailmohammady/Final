<?php
session_start();
include '../PHP/ConnectionToDatabase.php';

// Fetch all employee reports from the database
$sql = "SELECT ID, Username, Did_Reports, Activity_Time, Plane, Improve_Precentage, Result, Problems, Resolve_Sugestion, Date, Observation FROM employeereport";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جدول گزارش کارمندان</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        * {
            font-family: 'B Nazanin';
        }
        .table-custom {
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin: 0;
        }
        .table-custom th {
            background-color: DodgerBlue; /* Updated to DodgerBlue */
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
            margin: 0;
        }
    </style>
</head>
<body dir="rtl">
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-4"><b>فارمت گزارشدهی کارمندان</b></h2>
        <button type="button" class="btn btn-primary" onclick="window.location.href='EmployeeReport.php'">ثبت گزارش جدید</button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-custom">
            <thead>
                <tr>
                    <th>آی دی</th>
                    <th>نام کاربر</th>
                    <th>گزارش</th>
                    <th>زمان</th>
                    <th>پلان</th>
                    <th>پیشرفت</th>
                    <th>نتیجه</th>
                    <th>مشکلات</th>
                    <th>راه حل</th>
                    <th>تاریخ</th>
                    <th>ملاحظات</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['ID']) ?></td>
                            <td><?= htmlspecialchars($row['Username']) ?></td>
                            <td><?= htmlspecialchars($row['Did_Reports']) ?></td>
                            <td><?= htmlspecialchars($row['Activity_Time']) ?></td>
                            <td><?= htmlspecialchars($row['Plane']) ?></td>
                            <td><?= htmlspecialchars($row['Improve_Precentage']) ?></td>
                            <td><?= htmlspecialchars($row['Result']) ?></td>
                            <td><?= htmlspecialchars($row['Problems']) ?></td>
                            <td><?= htmlspecialchars($row['Resolve_Sugestion']) ?></td>
                            <td><?= htmlspecialchars($row['Date']) ?></td>
                            <td><?= htmlspecialchars($row['Observation']) ?></td>
                            <td>
                                <a href='../PHP/Update_Employee_Report.php?ID=<?= $row['ID'] ?>' class='btn btn-warning btn-sm'>ویرایش</a>
                                <button class='btn btn-danger btn-sm' onclick="confirmDelete('../PHP/delete_Employee_Report.php?ID=<?= $row['ID'] ?>');">حذف</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="12">هیچ اطلاعاتی موجود نیست</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(url) {
        Swal.fire({
            title: "آیا مطمئن هستید؟",
            text: "این عملیات قابل بازگشت نیست!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'بله، حذف کن!',
            cancelButtonText: 'خیر، منصرف شدم'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>
</body>
</html>
