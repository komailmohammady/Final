<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم راجستر</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../Css/dash.css" type="text/css">
    <link rel="stylesheet" href="../Css/Employee_Report.css" type="text/css">
    <script>
    // Function to confirm logout
    function confirmLogout() {
        var userConfirmed = confirm("آیا مطمئن هستید که می‌خواهید خارج شوید؟");
        if (userConfirmed) {
            window.location.href = '../PHP/logout.php';
        } else {
            return false;
        }
    }
    </script>
    <style>
        body {
        background-color: #f8f9fa;
        }
        .form-control {
            height: 40px;
        }
        .sidebar {
            height: 100vh; /* Make sidebar full height */
            overflow-y: auto; /* Scroll if content overflows */
        }
        .main-content {
            padding: 20px; /* Add padding to main content */
        }
        .header {
            text-align: center; /* Center the heading */
            margin-bottom: 30px; /* Add margin for spacing */
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);

            color: DodgerBlue;
            padding: 20px;
            border-radius: 20px;
        }
        .header h1 {
            font-size: 2rem; /* Increase font size */
            font-weight: bold; /* Make it bold */
        }
        .btn {
            padding: 10px;
            background-color: DodgerBlue;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'B Nazanin';
            font-weight: bold;
            width: 330px;
        }
    </style>
</head>
<body dir="rtl">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <img src="../img/logo.png" alt="لوگوی داشبورد" class="logo-img">
                <a href="../index.php"><i class="bi bi-house-door"></i> داشبورد</a>
                
                <!-- لینک کارمندان با data-bs-toggle برای فعال سازی collapse -->
                <a href="#employeesMenu" data-bs-toggle="collapse" aria-expanded="false" class="d-flex align-items-center">
                    <i class="bi bi-person"></i> کارمندان
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div id="employeesMenu" class="collapse">
                    <ul>
                        <li><a href="EmployeeRegister.php" class="d-block">ثبت کارمند</a></li>
                        <li><a href="ShowEmployee.php" class="d-block">لیست کارمندان</a></li>
                    </ul>
                </div>

                <!-- لینک گزارشات با data-bs-toggle برای فعال سازی collapse -->
                <a href="#reportsMenu" data-bs-toggle="collapse" aria-expanded="false" class="d-flex align-items-center">
                    <i class="bi bi-file-earmark-text"></i> گزارشات
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div id="reportsMenu" class="collapse">
                    <ul>
                        <li><a href="EmployeeReport.php" class="d-block">ثبت گزارش</a></li>
                        <li><a href="ShowEmployeeReport.php" class="d-block">لیست گزارشات</a></li>
                    </ul>
                </div>

                <a href="#" onclick="confirmLogout()"><i class="bi bi-box-arrow-right"></i> خروج</a>
            </div>
            
            <!-- Main Content Area -->
            <div class="col-md-10 main-content">
                <div class="header">
                    <h1>فرم ثبت کارمندان ریاست امور متعلمین و محصلین</h1>
                </div>

                <form action="../PHP/EmployeeRegisterAddCodes.php" method="post" id="form" onsubmit="return validateForm()">
                    <div class="form-row">
                        <div class="form-col">
                            <label for="UserName">آي دی</label>
                            <input type="number" id="UserName" name="ID" class="form-control">
                        </div>

                        <div class="form-col">
                            <label for="Report">اسم</label>
                            <input type="text" id="Report" name="Name" class="form-control">
                        </div>

                        <div class="form-col">
                            <label for="Time">تخلص</label>
                            <input type="text" id="Time" name="LastName" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <label for="Plane">ولد</label>
                            <input type="text" id="Plane" name="FatherName" class="form-control">
                        </div>
                        
                        <div class="form-col">
                            <label for="solve">عنوان بست</label>
                            <input type="text" id="solve" name="PostType" class="form-control">
                        </div>
                        
                        <div class="form-col">
                            <label for="signature">نوعیت وظیفه</label>
                            <input type="text" id="signature" name="JobType" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <label for="persent">کاربر</label>
                            <input type="text" id="persent" name="Username" class="form-control">
                        </div>

                        <div class="form-col position-relative">
                            <label for="state">رمز عبور</label>
                            <input type="password" id="state" name="Password" class="form-control">
                            <i class="bi bi-eye-slash position-absolute top-50 start-0 me-2 toggle-icon" style="cursor: pointer;margin-left:10px;margin-top:5px;" id="togglePassword1" onclick="togglePassword('state', 'togglePassword1')"></i>
                        </div>

                        <div class="form-col position-relative">
                            <label for="prob">تایید رمز عبور</label>
                            <input type="password" id="prob" name="Conform_Password" class="form-control">
                            <i class="bi bi-eye-slash position-absolute top-50 start-0 me-3 toggle-icon" style="cursor: pointer;margin-left:10px;margin-top:5px;" id="togglePassword2" onclick="togglePassword('prob', 'togglePassword2')"></i>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <label for="Post_No">بست</label>
                            <select name="PostNo" class="form-control">
                                <option value="بست اول">بست اول</option>
                                <option value="بست دوم">بست دوم</option>
                                <option value="بست سوم">بست سوم</option>
                                <option value="بست چهارم">بست چهارم</option>
                                <option value="بست پنجم">بست پنجم</option>
                            </select>
                        </div>

                        <div class="form-col">
                            <label for="Relevant_Department">آمریت مربوطه</label>
                            <select name="ReleventDep" class="form-control">
                                <option value="آمریت امور مکاتب">آمریت امور مکاتب</option>
                                <option value="آمریت نتایج">آمریت نتایج</option>
                                <option value="آمریت تعلیمات خاص">آمریت تعلیمات خاص</option>
                                <option value="آمریت امور تنظیم لیله ها">آمریت امور تنظیم لیلیه ها</option>
                            </select>
                        </div>

                        <div class="form-col">
                            <label for="Observation">ملاحضات</label>
                            <textarea name="Observation" id="Observation" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-row" style="justify-content: center;">
                        <button type="submit" name="submit" id="btn" class="btn btn-primary">ثبت کارمند</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
