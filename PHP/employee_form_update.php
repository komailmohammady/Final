<?php
// Database connection
include 'ConnectionToDatabase.php';

// Fetch employee data based on the ID passed via GET parameter
$employee_id = $_GET['ID'];
$sql = "SELECT * FROM employee_register WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $employee_id);
$stmt->execute();
$result = $stmt->get_result();
$employee = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $id = $_POST['ID'];
    $name = $_POST['Name'];
    $lastName = $_POST['LastName'];
    $fatherName = $_POST['FatherName'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $postType = $_POST['PostType'];
    $jobType = $_POST['JobType'];
    $postNo = $_POST['PostNo'];
    $releventDep = $_POST['ReleventDep'];
    $observation = $_POST['Observation'];

    $sql = "UPDATE employee_register SET Name=?, LastName=?, FatherName=?, Username=?, Password=?, PostType=?, JobType=?, PostNo=?, ReleventDep=?, Observation=? WHERE ID=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssi", $name, $lastName, $fatherName, $username, $password, $postType, $jobType, $postNo, $releventDep, $observation, $id);
    
    if ($stmt->execute()) {
        echo "<script>
            alert('موفقانه ویرایش شد!');
            window.location.href = '../dashboardpages/ShowEmployee.php';
        </script>";
    } else {
        echo "<script>
            alert('خطا در ویرایش!');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش کارمند</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/Employee_Report.css">
    <script src="../js/script.js"></script>
    <style>
        .form-control {
            height: 40px;
        }
        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body dir="rtl">

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2><b>ویرایش کارمندان</b></h2>
        <button type="button" class="btn-close" aria-label="Close" onclick="closeForm()" style="transform: rotate(180deg);"></button>
    </div>

    <form action="employee_form_update.php" method="post" id="form" onsubmit="return validateForm()">
        <input type="hidden" name="ID" value="<?php echo $employee['ID']; ?>">
        
        <div class="form-row">
            <div class="form-col">
                <label for="UserName">آي دی</label>
                <input type="number" id="UserName" name="ID" class="form-control" value="<?php echo $employee['ID']; ?>" disabled>
            </div>

            <div class="form-col">
                <label for="Report">اسم</label>
                <input type="text" id="Report" name="Name" class="form-control" value="<?php echo $employee['Name']; ?>">
            </div>

            <div class="form-col">
                <label for="Time">تخلص</label>
                <input type="text" id="Time" name="LastName" class="form-control" value="<?php echo $employee['LastName']; ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label for="Plane">ولد</label>
                <input type="text" id="Plane" name="FatherName" class="form-control" value="<?php echo $employee['FatherName']; ?>">
            </div>

            <div class="form-col">
                <label for="persent">کاربر</label>
                <input type="text" id="persent" name="Username" class="form-control" value="<?php echo $employee['Username']; ?>">
            </div>

            <div class="form-col position-relative">
                <label for="state">رمز عبور</label>
                <input type="password" id="state" name="Password" class="form-control" value="<?php echo $employee['Password']; ?>">
                <i class="bi bi-eye-slash position-absolute top-50 start-0 me-2 toggle-icon" style="cursor: pointer;margin-left:10px;margin-top:5px;" id="togglePassword1" onclick="togglePassword('state', 'togglePassword1')"></i>
            </div>
        </div>

        <div class="form-row">
            <div class="form-col position-relative">
                <label for="prob">تایید رمز عبور</label>
                <input type="password" id="prob" name="Conform_Password" class="form-control" value="<?php echo $employee['Password']; ?>">
                <i class="bi bi-eye-slash position-absolute top-50 start-0 me-3 toggle-icon" style="cursor: pointer;margin-left:10px;margin-top:5px;" id="togglePassword2" onclick="togglePassword('prob', 'togglePassword2')"></i>
            </div>

            <div class="form-col">
                <label for="solve">عنوان بست</label>
                <input type="text" id="solve" name="PostType" class="form-control" value="<?php echo $employee['PostType']; ?>">
            </div>

            <div class="form-col">
                <label for="signature">نوعیت وظیفه</label>
                <input type="text" id="signature" name="JobType" class="form-control" value="<?php echo $employee['JobType']; ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label for="Post_No">بست</label>
                <select name="PostNo" class="form-control">
                    <option value="بست اول" <?php if($employee['PostNo'] == 'بست اول') echo 'selected'; ?>>بست اول</option>
                    <option value="بست دوم" <?php if($employee['PostNo'] == 'بست دوم') echo 'selected'; ?>>بست دوم</option>
                    <option value="بست سوم" <?php if($employee['PostNo'] == 'بست سوم') echo 'selected'; ?>>بست سوم</option>
                    <option value="بست چهارم" <?php if($employee['PostNo'] == 'بست چهارم') echo 'selected'; ?>>بست چهارم</option>
                    <option value="بست پنجم" <?php if($employee['PostNo'] == 'بست پنجم') echo 'selected'; ?>>بست پنجم</option>
                </select>
            </div>

            <div class="form-col">
                <label for="Relevant_Department">آمریت مربوطه</label>
                <select name="ReleventDep" class="form-control">
                    <option value="آمریت امور مکاتب" <?php if($employee['ReleventDep'] == 'آمریت امور مکاتب') echo 'selected'; ?>>آمریت امور مکاتب</option>
                    <option value="آمریت نتایج" <?php if($employee['ReleventDep'] == 'آمریت نتایج') echo 'selected'; ?>>آمریت نتایج</option>
                    <option value="آمریت تعلیمات خاص" <?php if($employee['ReleventDep'] == 'آمریت تعلیمات خاص') echo 'selected'; ?>>آمریت تعلیمات خاص</option>
                    <option value="آمریت امور تنظیم لیله ها" <?php if($employee['ReleventDep'] == 'آمریت امور تنظیم لیله ها') echo 'selected'; ?>>آمریت امور تنظیم لیله ها</option>
                </select>
            </div>

            <div class="form-col">
                <label for="Observation">ملاحضات</label>
                <textarea name="Observation" id="Observation" class="form-control"><?php echo $employee['Observation']; ?></textarea>
            </div>
        </div>

        <div class="form-row" style="justify-content: center;">
            <button type="submit" name="update">ویرایش کارمند</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
