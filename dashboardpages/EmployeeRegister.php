<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گزارشدهی کارمندان</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/Employee_Report.css">

    <!--This the JavaScript Code of this this form-->
    
    <script>
        function closeForm() {
            window.location.href = "../index.php";
        }
    </script>

</head>
<body dir="rtl">

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2><b>فارمت گزارشدهی کارمندان</b></h2>
        <!-- دکمه بستن (چلیپا) -->
        <button type="button" class="btn-close" aria-label="Close" onclick="closeForm()" style="transform: rotate(180deg);"></button>
    </div>

    <form action="emp_reg.php" method="post" id="form">
        <div class="form-row">
            <div class="form-col">
                <label for="UserName">نام کاربر</label>
                <input type="text" id="UserName" name="نام_کاربر" class="form-control">
            </div>

            <div class="form-col">
                <label for="Report">گزارش فعالیت های انجام شده</label>
                <input type="text" id="Report" name="گزارش_فعالیت_های_انجام_شده" class="form-control">
            </div>

            <div class="form-col">
                <label for="Time">زمان اجرای فعالیت</label>
                <input type="text" id="Time" name="زمان_اجرای_فعالیت" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label for="Plane">مربوط پلان عملیاتی/خارج از پلان</label>
                <input type="text" id="Plane" name="مربوط_پلان_عملیاتی" class="form-control">
            </div>

            <div class="form-col">
                <label for="persent">فیصدی پیشرفت</label>
                <input type="text" id="persent" name="فیصدی_پیشرفت" class="form-control">
            </div>

            <div class="form-col">
                <label for="state">نتیجه/دستاورد</label>
                <input type="text" id="state" name="نتیجه_دستاورد" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label for="prob">مشکلات/نواقص و کمبودات</label>
                <input type="text" id="prob" name="مشکلات_نواقص" class="form-control">
            </div>

            <div class="form-col">
                <label for="solve">راه حل پیشنهادی</label>
                <input type="text" id="solve" name="راه_حل_پیشنهادی" class="form-control">
            </div>

            <div class="form-col">
                <label for="signature">ملاحظات</label>
                <input type="text" id="signature" name="ملاحظات" class="form-control">
            </div>
        </div>

        <div class="form-row" style="justify-content: center;">
            <button type="submit">ثبت گزارشات</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
        