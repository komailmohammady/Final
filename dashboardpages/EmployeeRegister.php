<!DOCTYPE html>
<<<<<<< HEAD
<html lang="fa"> <!-- تعریف زبان فارسی برای سند HTML -->
<head>
    <meta charset="UTF-8"> <!-- تنظیم کدگذاری کاراکترها به UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- تنظیم مقیاس صفحه برای نمایش در دستگاه‌های مختلف -->
    <title>فرم راجستر</title> <!-- عنوان صفحه -->
    
    <!-- لینک به فایل‌های CSS بوت‌استرپ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- لینک به آیکون‌های بوت‌استرپ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- لینک به فایل‌های CSS سفارشی -->
    <link rel="stylesheet" href="../Css/dash.css" type="text/css">
    <link rel="stylesheet" href="../Css/Employee_Report.css" type="text/css">
    
    <!-- لینک به فایل‌های JavaScript سفارشی -->
    <script src="../js/script.js"></script>
    
    <style>
        body {
            background-color: #f8f9fa; /* تنظیم رنگ پس‌زمینه */
        }
        .form-control {
            height: 40px; /* تنظیم ارتفاع ورودی‌های فرم */
        }
        .sidebar {
            height: 100vh; /* تنظیم ارتفاع نوار کناری به اندازه کل صفحه */
            overflow-y: auto; /* اضافه کردن اسکرول در صورت نیاز */
        }
        .main-content {
            padding: 20px; /* اضافه کردن فاصله داخلی به محتوای اصلی */
        }
        .header {
            text-align: center; /* تراز کردن متن به مرکز */
            margin-bottom: 30px; /* اضافه کردن فاصله پایین */
            background: white; /* رنگ پس‌زمینه سفید */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05); /* تنظیم سایه برای جلوه */
            color: DodgerBlue; /* رنگ متن سرآیند */
            padding: 20px; /* فاصله داخلی سرآیند */
            border-radius: 20px; /* گرد کردن گوشه‌های سرآیند */
        }
        .header h1 {
            font-size: 2rem; /* افزایش اندازه فونت عنوان */
            font-weight: bold; /* ضخیم کردن متن عنوان */
        }
        .btn {
            padding: 10px; /* فاصله داخلی دکمه‌ها */
            background-color: DodgerBlue; /* رنگ پس‌زمینه دکمه‌ها */
            color: white; /* رنگ متن دکمه‌ها */
            border: none; /* حذف حاشیه دکمه‌ها */
            border-radius: 5px; /* گرد کردن گوشه‌های دکمه‌ها */
            font-size: 20px; /* اندازه فونت دکمه‌ها */
            cursor: pointer; /* تغییر نشانگر ماوس به حالت اشاره‌گر */
            transition: background-color 0.3s; /* افزودن انیمیشن تغییر رنگ */
            font-family: 'B Nazanin'; /* تنظیم فونت دکمه‌ها */
            font-weight: bold; /* ضخیم کردن متن دکمه‌ها */
            width: 330px; /* عرض دکمه‌ها */
        }
    </style>
</head>
<body dir="rtl"> <!-- جهت متن به راست‌چین تغییر داده شده است -->
    <div class="container-fluid"> <!-- استفاده از کانتینر سیال برای محتوای صفحه -->
        <div class="row">
          
            <!-- ناحیه محتوای اصلی -->
            <div class="col-md-10 main-content">
                <div class="header">
                    <h1>فرم ثبت کارمندان ریاست امور متعلمین و محصلین</h1> <!-- عنوان صفحه فرم -->
                </div>

                <!-- فرم ثبت کارمند -->
                <form action="../PHP/EmployeeRegisterAddCodes.php" method="post" id="form" onsubmit="return validateForm()">
                    <div class="form-row">
                        <div class="form-col">
                            <label for="UserName">آی‌دی</label> <!-- برچسب آی‌دی -->
                            <input type="number" id="UserName" name="ID" class="form-control"> <!-- ورودی آی‌دی -->
                        </div>

                        <div class="form-col">
                            <label for="Report">اسم</label> <!-- برچسب اسم -->
                            <input type="text" id="Report" name="Name" class="form-control"> <!-- ورودی اسم -->
                        </div>

                        <div class="form-col">
                            <label for="Time">تخلص</label> <!-- برچسب تخلص -->
                            <input type="text" id="Time" name="LastName" class="form-control"> <!-- ورودی تخلص -->
=======
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
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
<<<<<<< HEAD
                            <label for="Plane">ولد</label> <!-- برچسب ولد -->
                            <input type="text" id="Plane" name="FatherName" class="form-control"> <!-- ورودی ولد -->
                        </div>
                        
                        <div class="form-col">
                            <label for="solve">عنوان بست</label> <!-- برچسب عنوان بست -->
                            <input type="text" id="solve" name="PostType" class="form-control"> <!-- ورودی عنوان بست -->
                        </div>
                        
                        <div class="form-col">
                            <label for="signature">نوعیت وظیفه</label> <!-- برچسب نوعیت وظیفه -->
                            <input type="text" id="signature" name="JobType" class="form-control"> <!-- ورودی نوعیت وظیفه -->
=======
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
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
<<<<<<< HEAD
                            <label for="persent">کاربر</label> <!-- برچسب کاربر -->
                            <input type="text" id="persent" name="Username" class="form-control"> <!-- ورودی کاربر -->
                        </div>

                        <div class="form-col position-relative">
                            <label for="state">رمز عبور</label> <!-- برچسب رمز عبور -->
                            <input type="password" id="state" name="Password" class="form-control"> <!-- ورودی رمز عبور -->
                            <i class="bi bi-eye-slash position-absolute top-50 start-0 me-2 toggle-icon" style="cursor: pointer;margin-left:10px;margin-top:5px;" id="togglePassword1" onclick="togglePassword('state', 'togglePassword1')"></i> <!-- آیکون نمایش رمز عبور -->
                        </div>

                        <div class="form-col position-relative">
                            <label for="prob">تایید رمز عبور</label> <!-- برچسب تایید رمز عبور -->
                            <input type="password" id="prob" name="Conform_Password" class="form-control"> <!-- ورودی تایید رمز عبور -->
                            <i class="bi bi-eye-slash position-absolute top-50 start-0 me-2 toggle-icon" style="cursor: pointer;margin-left:10px;margin-top:5px;" id="togglePassword2" onclick="togglePassword('prob', 'togglePassword2')"></i> <!-- آیکون نمایش رمز عبور -->
                        </div>
                    </div>

                    <div class="text-center"> <!-- دکمه‌های ثبت و پاک کردن فرم -->
                        <button type="submit" class="btn">راجستر</button>
                        <button type="reset" class="btn" style="background-color: DodgerBlue;">پاک کردن فرم</button>
=======
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
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
                    </div>
                </form>
            </div>
        </div>
<<<<<<< HEAD
    </div>

    <!-- جاوا اسکریپت بوت‌استرپ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
=======

        <!-- Bootstrap JS and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
</html>
