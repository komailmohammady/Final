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
            fetch('get_total_reports.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('totalReports').innerText = data.total_reports;
            });
        }, 60000);

        setInterval(function() {
            fetch('get_total_ShowEmployeeReport.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('EmployeeReport').innerText = data.total_ShowEmployeeReport;
            });
        }, 60000);
    </script>
</head>
<body dir="rtl">
<div class="container-fluid">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-15 content">
            <div class="main--content p-4">
                <div class="header--wrapper d-flex justify-content-between align-items-center mb-3">
                    <div class="header--title">
                        <span>اصلی</span>
                        <h2>داشبورد</h2>
                    </div>
                    <div class="user--info">
                        <div class="search--box">
                            <i class="bi bi-search"></i>
                            <input type="search" id="searchInput" placeholder="جستجو" class="form-control">
                            <div id="autocompleteList" class="list-group mt-1 position-absolute" style="z-index:1; width:300px; background-color:unset;"></div>
                        </div>
                        
                    </div>
                    <a href="" style="text-decoration: none;">
                        <button  class="name" style="padding:3px 8px; border:0.5 solid gray; border-radius:20px; background-color:#073B4C; color:white;">
                            اضافه کردن پلان کاری
                        </button>
                    </a>    
                </div>
                
                <!-- This is the main content of index -->
                
                <!-- فوتر -->
                <!-- <footer>
                    <p>&copy; 2024 تمامی حقوق محفوظ است. طراحی شده توسط محصلین ممتاز تکنالوژی کمپیوتر.</p>
                </footer> -->

                <!-- Message Modal -->
                <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title ms-2" id="messageModalLabel">ارسال پیام</h5>
                                <button type="button" class="btn-close ms-3" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="messageForm" action="">
                                    <div class="mb-3">
                                        <label for="message" class="form-label">پیام:</label>
                                        <textarea class="form-control" id="message" rows="12" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">ارسال</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap JS and dependencies -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
                <script src="js/Search.js"></script> <!-- لینک به فایل جاوا اسکریپت خارجی -->
            </div>
        </div>
    </div>
</div>
</body>
</html>
