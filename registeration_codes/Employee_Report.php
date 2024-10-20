<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration Form</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to CSS file -->
</head>
<body dir="rtl">

<h2 id="Format">فارمت گزارشدهی کارمندان</h2>
<br><br><br>

<form action="reg_emp.php" method="post" id="form">
    <table>
        <tr>
            <td>
                <label for=""> نام کاربر</label>
                <input type="text" id="Report" name="employee_name" required>
            </td>
            <td>
                <label for=""> گزارش فعالیت های انجام شده</label>
                <input type="text" id="Report" name="did_reports" required>
            </td>
            <td>
                <label for="">زمان اجرای فعالیت</label>
                <input type="text" id="Time" name="activity_time" required>
            </td>
            <td>
                <label for="">مربوط پلان عملیاتی/خارج از پلان</label>
                <input type="text" id="Plane" name="plan" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="city">فیصدی پیشرفت</label>
                <input type="text" id="persent" name="improve_precentage" required>
            </td>
            <td>
                <label for="state">نتیجه/دستاورد</label>
                <input type="text" id="state" name="result" required>
            </td>
            <td>
                <label for="joining">مشکلات/نواقص و کمبودات</label>
                <input type="text" id="prob" name="problems" required>
            </td>
            <td>
                <label for="joining">راه حل پیشنهادی</label>
                <input type="text" id="solve" name="resolve_sugestion" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="joining">ملاحظات</label>
                <input type="text" id="signature" name="observition" required>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">راجستر</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
