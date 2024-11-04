<?php
// Database connection
<<<<<<< HEAD
include 'PHP/ConnectionToDatabase.php';

// Fetch all employee records from the database
$sql = "SELECT ID, Name, LastName, FatherName, Username, PostType, JobType, ReleventDep, PostNo, Observation FROM employee_register";
$result = $conn->query($sql);
?>

=======
include '../PHP/ConnectionToDatabase.php';

// Fetch all employee records from the database
$sql = "SELECT * FROM employee_register";
$result = $conn->query($sql);
?>
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جدول کارمندان</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="../js/script.js"></script>
=======
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="../js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
    <style>
        * {
            font-family: 'B Nazanin';
        }
        .table-custom {
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
<<<<<<< HEAD
            margin: 0;
=======
            margin: 0; /* Reduced margin */
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
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
<<<<<<< HEAD
            margin: 0;
=======
            margin: 0; /* Reduced margin for the container */
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
        }
    </style>
</head>
<body dir="rtl">
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-4"><b>لیست کارمندان ریاست امور متعلمین و محصلین</b></h2>
        <button type="button" class="btn-close" aria-label="Close" onclick="closeForm()" style="transform: rotate(180deg);"></button>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-custom">
            <thead>
                <tr>
                    <th>آی دی</th>
                    <th>اسم</th>
                    <th>تخلص</th>
                    <th>ولد</th>
                    <th>نام کاربر</th>
                    <th>عنوان بست</th>
                    <th>نوعیت وظیفه</th>
                    <th>آمریت مربوطه</th>
                    <th>بست</th>
                    <th>ملاحظات</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <?php
<<<<<<< HEAD
                if ($result && $result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . htmlspecialchars($row['ID']) . "</td>
                            <td>" . htmlspecialchars($row['Name']) . "</td>
                            <td>" . htmlspecialchars($row['LastName']) . "</td>
                            <td>" . htmlspecialchars($row['FatherName']) . "</td>
                            <td>" . htmlspecialchars($row['Username']) . "</td>
                            <td>" . htmlspecialchars($row['PostType']) . "</td>
                            <td>" . htmlspecialchars($row['JobType']) . "</td>
                            <td>" . htmlspecialchars($row['ReleventDep']) . "</td>
                            <td>" . htmlspecialchars($row['PostNo']) . "</td>
                            <td>" . htmlspecialchars($row['Observation']) . "</td>
                            <td>
                                <a href='PHP/employee_form_update.php?ID=" . htmlspecialchars($row['ID']) . "' class='btn btn-warning btn-sm'>ویرایش</a>
                                <button class='btn btn-danger btn-sm' onclick=\"confirmDelete('" . htmlspecialchars($row['ID']) . "')\">حذف</button>
=======
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row['ID'] . "</td>
                            <td>" . $row['Name'] . "</td>
                            <td>" . $row['LastName'] . "</td>
                            <td>" . $row['FatherName'] . "</td>
                            <td>" . $row['Username'] . "</td>
                            <td>" . $row['PostType'] . "</td>
                            <td>" . $row['JobType'] . "</td>
                            <td>" . $row['ReleventDep'] . "</td>
                            <td>" . $row['PostNo'] . "</td>
                            <td>" . $row['Observation'] . "</td>
                            <td>
                                <a href='../PHP/employee_form_update.php?ID=" . $row['ID'] . "' class='btn btn-warning btn-sm'>ویرایش</a>
                                <a href='javascript:void(0);' class='btn btn-danger btn-sm' onclick=\"confirmDelete('../PHP/delete_employee.php?ID=" . $row['ID'] . "');\">حذف</a>
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
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

<<<<<<< HEAD
<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'آیا مطمئن هستید؟',
        text: "این عمل غیر قابل بازگشت است!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'بله، حذف کن!',
        cancelButtonText: 'خیر، منصرف شدم'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../PHP/delete_employee.php?ID=' + id;
        }
    });
}
=======
<script>
    function confirmDelete(url) {
        swal({
            title: "آیا شما مطمئن هستید؟",
            text: "این کاربر به طور دائمی حذف خواهد شد!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "بله، حذف کن!",
            cancelButtonText: "خیر، منصرف شوم!",
            closeOnConfirm: false
        }, function() {
            window.location.href = url;
        });
    }
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
