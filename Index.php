<?php
include 'PHP/ConnectionToDatabase.php';
<<<<<<< HEAD

// Fetch the total number of employees
=======
>>>>>>> 6a52a6d03f6bca579221fcfdf44a6376327086b0
$sql = "SELECT COUNT(*) as total_reports FROM employee_register";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalReports = $row['total_reports'];

// Fetch the total number of employee reports
$sql_reports = "SELECT COUNT(*) as total_ShowEmployeeReport FROM employeereport";
$result_reports = $conn->query($sql_reports);
$row_reports = $result_reports->fetch_assoc();
$EmployeeReport = $row_reports['total_ShowEmployeeReport'];
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ریاست امور متعلمین و محصلین</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/dash.css" type="text/css">
    <script>
        setInterval(function() {
            fetch('get_total_reports.php') // Endpoint to fetch total reports
            .then(response => response.json())
            .then(data => {
                document.getElementById('totalReports').innerText = data.total_reports;
            });
        }, 60000); // Update every minute

<<<<<<< HEAD
        setInterval(function() {
            fetch('get_total_ShowEmployeeReport.php') // Endpoint to fetch total employee reports
            .then(response => response.json())
            .then(data => {
                document.getElementById('EmployeeReport').innerText = data.total_ShowEmployeeReport;
            });
        }, 60000); // Update every minute
    </script>
</head>
<body dir="rtl">
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <img src="img/logo.png" alt="لوگوی داشبورد" class="logo-img">
            <a href="index.php"><i class="bi bi-house-door"></i> داشبورد</a>
            
            <!-- لینک کارمندان با data-bs-toggle برای فعال سازی collapse -->
            <a href="#employeesMenu" data-bs-toggle="collapse" aria-expanded="false" class="d-flex align-items-center">
                <i class="bi bi-person"></i> کارمندان
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <div id="employeesMenu" class="collapse">
                <ul>
                    <li><a href="dashboardpages/EmployeeRegister.php" class="d-block">ثبت کارمند</a></li>
                    <li><a href="dashboardpages/ShowEmployee.php" class="d-block">لیست کارمندان</a></li>
                </ul>
            </div>

            <!-- لینک گزارشات با data-bs-toggle برای فعال سازی collapse -->
            <a href="#reportsMenu" data-bs-toggle="collapse" aria-expanded="false" class="d-flex align-items-center">
                <i class="bi bi-file-earmark-text"></i> گزارشات
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <div id="reportsMenu" class="collapse">
                <ul>
                    <li><a href="dashboardpages/EmployeeReport.php" class="d-block">ثبت گزارش</a></li>
                    <li><a href="dashboardpages/ShowEmployeeReport.php" class="d-block">لیست گزارشات</a></li>
                </ul>
            </div>

            <a href="logout.html"><i class="bi bi-box-arrow-right"></i> خروج</a>
            <br>
            <div style="margin-right: 20px; margin-top:50px;"  >
            <i class="bi bi-chat-dots-fill icon" id="toggleTextarea"></i><span></span>
            <h5 class="card-title"> </h5>
            <p class="card-text" id="totalReports"></p>
            <div class="textarea-container" id="textareaContainer" style="display: none;">
            <form action="">
            <textarea class="form-control mt-3" rows="3" placeholder="مسیج تان را تایپ نمایید..."></textarea>
            <button id="toggleTextarea" class="btn btn-primary" style="margin-right:65px; margin-top:10px;">Send</button>
            </form>

            </div>
          
    <div class="container">
</div>

            </div>
           
        </div>
        
        <!-- Main Content -->
        <div class="col-md-10 content">
            <div class="main--content">
                <div class="header--wrapper">
                    <div class="header--title">
                        <span>اصلی</span>
                        <h2>داشبورد</h2>
=======
            // Function to confirm logout
            function confirmLogout() {
            var userConfirmed = confirm("آیا مطمئن هستید که می‌خواهید خارج شوید؟");
                if (userConfirmed) {
                    window.location.href = 'PHP/logout.php';
                } else {
            return false;
            }
        }
        </Script>
    </head>
    <body dir="rtl">
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-2 sidebar">
                    <img src="img/logo.png" alt="لوگوی داشبورد" class="logo-img">
                    <a href="index.php"><i class="bi bi-house-door"></i> داشبورد</a>
                    
                    <!-- لینک کارمندان با data-bs-toggle برای فعال سازی collapse -->
                    <a href="#employeesMenu" data-bs-toggle="collapse" aria-expanded="false" class="d-flex align-items-center">
                        <i class="bi bi-person"></i> کارمندان
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <div id="employeesMenu" class="collapse">
                        <ul>
                            <li><a href="dashboardpages/EmployeeRegister.php" class="d-block">ثبت کارمند</a></li>
                            <li><a href="dashboardpages/ShowEmployee.php" class="d-block">لیست کارمندان</a></li>
                        </ul>
>>>>>>> 6a52a6d03f6bca579221fcfdf44a6376327086b0
                    </div>
                    <div class="user--info">
                        <div class="search--box">
                            <i class="bi bi-search"></i>
                            <input type="search" id="searchInput" placeholder="جستجو" class="form-control">
                            <div id="autocompleteList" class="list-group mt-1 position-absolute" style="z-index:1; width:300px; background-color:unset;"></div>
                        </div>
                    </div>
<<<<<<< HEAD
                </div>
=======

                    <a href="#" onclick="confirmLogout()"><i class="bi bi-box-arrow-right"></i> خروج</a>
                    </div>
>>>>>>> 6a52a6d03f6bca579221fcfdf44a6376327086b0
                
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card text-center">
                        <a href="./dashboardpages/ShowEmployee.php" style="text-decoration: none; color:black;">
                            <div class="card-body">
                                <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
                                <h5 class="card-title">تعداد کارمندان</h5>
                                <p class="card-text" id="totalReports"><?php echo $totalReports; ?></p>
                            </div>
                            </a>
                        </div>
                    </div>
                    

                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                            <a href="./dashboardpages/ShowEmployeeReport.php" style="text-decoration: none; color:black;">
                                <i class="bi bi-file-text" style="font-size: 2rem;"></i>
                                <h5 class="card-title">تعداد گزارشات</h5>
                                <p class="card-text" id="EmployeeReport"><?php echo $EmployeeReport; ?></p>
                            </a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="bi bi-graph-up-arrow icon" style="font-size: 2rem;"></i>
                                <h5 class="card-title">فعالیت های کارمندان</h5>
                                <p class="card-text">25%</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Additional Cards -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="bi bi-file-earmark-text" style="font-size: 2rem;"></i>
                                <h5 class="card-title">گزارش 1</h5>
                                <p class="card-text">این گزارش شامل اطلاعات مهمی است.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="bi bi-file-earmark-text" style="font-size: 2rem;"></i>
                                <h5 class="card-title">گزارش 2</h5>
                                <p class="card-text">این گزارش شامل اطلاعات تکمیلی است.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="bi bi-file-earmark-text" style="font-size: 2rem;"></i>
                                <h5 class="card-title">گزارش 3</h5>
                                <p class="card-text">این گزارش شامل اطلاعات جامع است.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<p>This is new code added</p>
<!-- فوتر -->
<footer>
    <p>&copy; 2024 تمامی حقوق محفوظ است. طراحی شده توسط محصلین ممتاز تکنالوژی کمپیوتر.</p>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/Search.js"></script> <!-- لینک به فایل جاوا اسکریپت خارجی -->
</body>
    <script>
    document.getElementById('toggleTextarea').addEventListener('click', function() {
        var textareaContainer = document.getElementById('textareaContainer');
        if (textareaContainer.style.display === 'none') {
            textareaContainer.style.display = 'block'; // Show the textarea
        } else {
            textareaContainer.style.display = 'none'; // Hide the textarea
        }
    });
</script>
</html>
