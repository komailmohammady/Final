<?php
    include '../PHP/ConnectionToDatabase.php'; 

// Handle delete request
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $conn->query("DELETE FROM imployee_reports WHERE id = $id");
}

// Fetch data from the register_form table
$sql = "SELECT id, username, did_reports, activity_time, plan, improve_precentage, result, problems, resolve_sugestion, observition FROM imployee_reports";
$result = $conn->query($sql);

// Start HTML
echo "<!DOCTYPE html>
<html lang='fa'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>جدول اطلاعات</title>
    <style>
        *{
        font-family: 'B Nazanin';
        }  
        body {
            background-color: #f4f4f4;
            margin: 20px;
            direction: rtl;
        }
        h2 {
            text-align: center; /* Center the heading */
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            font-size: 15px;
        }
        th, td {
            padding: 5px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: DodgerBlue;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .btn {
            padding: 8px 12px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
        }
        .btn-delete {
            background-color: orangered;
        }
        .btn-update {
            background-color: orange;
        }
    </style>
</head>
<body>
    <h2>لیست اطلاعات ثبت‌ کارمندان</h2>";

if ($result->num_rows > 0) {
    // Start HTML table
    echo "<table>
            <tr>
                <th>آی دی</th>
                <th>نام کاربر</th>
                <th>گزارش فعالیت های انجام شده</th>
                <th>زمان اجرای فعالیت </th>
                <th>نام مربوط پلان عملیاتی/خارج از پلان  </th>
                <th>فیصدی پیشرفت</th>
                <th>نوع نتیجه/دستاورد</th>
                <th>مشکلات/نواقص و کمبودات</th>
                <th>آمریت راه حل پیشنهادی</th>
                <th>ملاحظات</th>
                <th>حذف</th>
                <th>ویرایش</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["username"] . "</td>
                <td>" . $row["did_reports"] . "</td>
                <td>" . $row["activity_time"] . "</td>
                <td>" . $row["plan"] . "</td>
                <td>" . $row["improve_precentage"] . "</td>
                <td>" . $row["result"] . "</td>
                <td>" . $row["problems"] . "</td>
                <td>" . $row["resolve_sugestion"] . "</td>
                <td>" . $row["observition"] . "</td>
                <td>
                    <form method='POST' style='display:inline;'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <button class='btn btn-delete' name='delete'>حذف</button>
                    </form>
                </td>
                <td>
                    <form method='GET' action='EmployeeReport.php' style='display:inline;'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <button class='btn btn-update'>ویرایش</button>
                    </form>
                </td>
              </tr>";
    }

    // End HTML table
    echo "</table>";
} else {
    echo "<p>نتیجه‌ای یافت نشد.</p>";
}

// Close the connection
$conn->close();

echo "</body>
</html>";
?>