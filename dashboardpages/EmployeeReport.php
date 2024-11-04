<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گزارشدهی کارمندان</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<<<<<<< HEAD
    <link rel="stylesheet" href="../Css/dash.css" type="text/css" type="text/css">
    <link rel="stylesheet" href="../Css/Employee_Report.css" type="text/css">
    <link rel="stylesheet" href="../Css/kamadatepicker.min.css" type="text/css">
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
            background-color: #073B4C;
=======
    <link rel="stylesheet" href="../Css/dash.css" type="text/css">
    <link rel="stylesheet" href="../Css/Employee_Report.css">
    <link rel="stylesheet" href="../Css/kamadatepicker.min.css" type="text/css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .btn {
            padding: 10px;
            background-color: DodgerBlue;
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
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
<<<<<<< HEAD
=======
        .sidebar {
            height: 100vh;
            overflow-y: auto;
        }
        .main-content {
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            color: DodgerBlue;
            padding: 20px;
            border-radius: 20px;
        }
        .header h1 {
            font-size: 2rem;
            font-weight: bold;
        }
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
    </style>
</head>
<body dir="rtl">
    <div class="container-fluid">
        <div class="row">
<<<<<<< HEAD
            
=======
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <img src="../img/logo.png" alt="لوگوی داشبورد" class="logo-img">
                <a href="../index.php"><i class="bi bi-house-door"></i> داشبورد</a>
                
                <!-- کارمندان لینک با data-bs-toggle برای فعال سازی collapse -->
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

                <!-- گزارشات لینک با data-bs-toggle برای فعال سازی collapse -->
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

>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
            <!-- Main Content Area -->
            <div class="col-md-10 main-content">
                <div class="header">
                    <h1>فارمت گزارشدهی کارمندان</h1>
                </div>

<<<<<<< HEAD
                <form action="../PHP/EmployeeReportAdd.php" method="post" id="form" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-col">
                            <label for="Report">گزارش فعالیت های انجام شده</label>
                            <input type="text" id="Report" name="Did_Reports" class="form-control">
                        </div>
                        <div class="form-col">
                            <label for="Time">زمان اجرای فعالیت</label>
                            <input type="text" id="Time" name="Activity_Time" class="form-control">
                        </div>
                        <div class="form-col">
                            <label for="Plane">پلان</label>
                            <select name="Plane" class="form-control">
=======
                <form action="../PHP/EmployeeReportAdd.php" method="post" id="form">
                    <div class="form-row">
                        <div class="form-col">
                            <label for="Report">گزارش فعالیت های انجام شده</label>
                            <input type="text" id="Report" name="Did_Reports" class="form-control" required>
                        </div>
                        <div class="form-col">
                            <label for="Time">زمان اجرای فعالیت</label>
                            <input type="text" id="Time" name="Activity_Time" class="form-control" required>
                        </div>
                        <div class="form-col">
                            <label for="Plane">پلان</label>
                            <select name="Plane" class="form-control" required>
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
                                <option value="پلان مربوطه">پلان مربوطه</option>
                                <option value="خارج از پلان">خارج از پلان</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <label for="persent">فیصدی پیشرفت</label>
<<<<<<< HEAD
                            <input type="text" id="persent" name="Improve_Precentage" class="form-control">
                        </div>
                        <div class="form-col">
                            <label for="state">نتیجه/دستاورد</label>
                            <input type="text" id="state" name="Result" class="form-control">
                        </div>
                        <div class="form-col">
                            <label for="date">تاریخ</label>
                            <input type="text" id="datepacker" name="Date" class="form-control">
=======
                            <input type="text" id="persent" name="Improve_Precentage" class="form-control" required>
                        </div>
                        <div class="form-col">
                            <label for="state">نتیجه/دستاورد</label>
                            <input type="text" id="state" name="Result" class="form-control" required>
                        </div>
                        <div class="form-col">
                            <label for="date">تاریخ</label>
                            <input type="text" id="datepacker" name="Date" class="form-control" required>
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <label for="prob">مشکلات/نواقص و کمبودات</label>
<<<<<<< HEAD
                            <input type="text" id="prob" name="Problems" class="form-control">
                        </div>
                        <div class="form-col">
                            <label for="solve">راه حل پیشنهادی</label>
                            <input type="text" id="solve" name="Resolve_Sugestion" class="form-control">
                        </div>
                        <div class="form-col">
                            <label for="Observation">ملاحظات</label>
                            <input type="text" id="Observation" name="Observation" class="form-control">
=======
                            <input type="text" id="prob" name="Problems" class="form-control" required>
                        </div>
                        <div class="form-col">
                            <label for="solve">راه حل پیشنهادی</label>
                            <input type="text" id="solve" name="Resolve_Sugestion" class="form-control" required>
                        </div>
                        <div class="form-col">
<<<<<<< HEAD
                            <label for="Observation">ملاحظات</label>
                            <textarea name="Observation" id="Observation" class="form-control"></textarea>
=======
<<<<<<< HEAD
                            <label for="dateInput">تاریخ</label>
                            <input type="date" id="dateInput" name="Date" class="form-control">
=======
                            <label for="date">تاریخ</label>
                            <input type="text" id="datepacker" name="Date" class="form-control">
>>>>>>> 6a52a6d03f6bca579221fcfdf44a6376327086b0
>>>>>>> 4e9ab85b86615e960bfda09f794b8d03bd078606
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
                        </div>
                    </div>

                    <div class="form-row" style="justify-content: center;">
                        <button type="submit" class="btn btn-primary">ثبت گزارشات</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<<<<<<< HEAD
=======
<<<<<<< HEAD
    <script src="../js/assits/jquery.js"></script>
    <script src="../js/assits/kamadatepicker.min.js"></script>
    <script>
        kamaDatepicker('datepacker', {
            twodigit: true,
            closeAfterSelect: true,
            nextButtonIcon: "bi bi-chevron-left",
            previousButtonIcon: "bi bi-chevron-right",
            buttonsColor: "DodgerBlue",
            placeholder: "تاریج ",
            forceFarsiDigits: true,
            markToday: true,
            markHolidays: true,
            highlightSelectedDay: true,
            sync: true,
            gotoToday: true,
            todayButtonText: "امروز",
            theme: "modern" // Use the 'modern' theme for a cleaner design
        });
=======
<<<<<<< HEAD
    <p>Today's Date: </p>

    <script>
 // Create a new Date object
const today = new Date();

// Format the date as YYYY-MM-DD
const formattedDate = today.toISOString().slice(0, 10);

// Set the value of the date input to the current date
document.getElementById("dateInput").value = formattedDate;
=======
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
    <script src="../js/assits/jquery.js"></script>
    <script src="../js/assits/kamadatepicker.min.js"></script>
    <script>
        let options = {
    placeholder: "تاریخ",
    twodigit: false,
    closeAfterSelect: false,
    nextButtonIcon : "../img/timeir_next.png",
    previousButtonIcon : "../img/timeir_prev.png",
    buttonsColor:"blue",
    forceFarsiDigits : true,
    markToday: true,
    markHolidays:true,
    sync:true,
    gotoToday:true
}


        kamaDatepicker('datepacker',options);
        $("#datepacker").vla("1403/8/3")
<<<<<<< HEAD
=======
>>>>>>> 6a52a6d03f6bca579221fcfdf44a6376327086b0
>>>>>>> 4e9ab85b86615e960bfda09f794b8d03bd078606
>>>>>>> 86d55ce7414deceb38c987824110e342c508389c
    </script>
</body>
</html>
