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
</head>
<body dir="rtl">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <img src="img/logo.png" alt="لوگوی داشبورد" class="logo-img">
                <a href="settings.html"><i class="bi bi-house-door"></i> داشبورد</a>
                
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
                        <li><a href="dashboardpages/Employee_Report.php" class="d-block">ثبت گزارش</a></li>
                        <li><a href="report_list.html" class="d-block">لیست گزارشات</a></li>
                    </ul>
                </div>

                <a href="logout.html"><i class="bi bi-box-arrow-right"></i> خروج</a>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-10 content">
                <div class="main--content">
                    <div class="header--wrapper">
                        <div class="header--title">
                            <span>اصلی</span>
                            <h2>داشبورد</h2>
                        </div>
                        <div class="user--info">
                            <div class="search--box">
                                <i class="bi bi-search"></i>
                                <input type="search" placeholder="جستجو">
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
                                <h5 class="card-title">تعداد کاربران</h5>
                                <p class="card-text">125</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="bi bi-cart" style="font-size: 2rem;"></i>
                                <h5 class="card-title">تعداد سفارشات</h5>
                                <p class="card-text">80</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="bi bi-currency-dollar" style="font-size: 2rem;"></i>
                                <h5 class="card-title">درآمد</h5>
                                <p class="card-text">2,500,000 تومان</p>
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

    <!-- فوتر -->
    <footer>
        <p>&copy; 2024 تمامی حقوق محفوظ است. طراحی شده توسط محصلین ممتاز تکنالوژی کمپیوتر.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
