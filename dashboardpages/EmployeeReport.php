<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گزارشدهی کارمندان</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../Css/dash.css" type="text/css">
    <link rel="stylesheet" href="../Css/Employee_Report.css">
    <link rel="stylesheet" href="assits/kamadatepicker.min.css">
    <style>
        body {
            background-color: #f8f9fa;
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
            <div class="col-md-10 main-content">
                <div class="header">
                    <h1>فارمت گزارشدهی کارمندان</h1>
                </div>

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
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <label for="Plane">پلان</label>
                            <select name="Plane" class="form-control" required>
                                <option value="پلان مربوطه">پلان مربوطه</option>
                                <option value="خارج از پلان">خارج از پلان</option>
                            </select>
                        </div>
                        <div class="form-col">
                            <label for="persent">فیصدی پیشرفت</label>
                            <input type="text" id="persent" name="Improve_Precentage" class="form-control" required>
                        </div>
                        <div class="form-col">
                            <label for="state">نتیجه/دستاورد</label>
                            <input type="text" id="state" name="Result" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <label for="prob">مشکلات/نواقص و کمبودات</label>
                            <input type="text" id="prob" name="Problems" class="form-control" required>
                        </div>
                        <div class="form-col">
                            <label for="solve">راه حل پیشنهادی</label>
                            <input type="text" id="solve" name="Resolve_Sugestion" class="form-control" required>
                        </div>
                        <div class="form-col">
                            <label for="date">تاریخ</label>
                            <input type="text" id="datepacker" name="Date" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-col-12 mb-3">
                        <label for="signature">ملاحظات</label>
                        <input type="text" id="signature" name="Observation" class="form-control">
                    </div>

                    <div class="form-row" style="justify-content: center;">
                        <button type="submit" class="btn btn-primary">ثبت گزارشات</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assits/jquery.js"></script>
    <script src="assits/kamadatepicker.min.js"></script>
    <script>
        kamaDatepicker('datepacker');
    </script>
</body>
</html>
