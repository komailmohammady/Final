<?php
// Establish a database connection
$servername = "localhost";  // Replace with your server name
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "final";          // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete request
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $conn->query("DELETE FROM imployee_reports WHERE id = $id");
}

// Initialize variables for date range
$startDate = '';
$endDate = '';

// Handle date range request
if (isset($_POST['search'])) {
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
}

// Fetch data from the imployee_reports table
$sql = "SELECT id, username, did_reports, activity_time, plan, improve_precentage, result, problems, resolve_sugestion, Reg_Date, observition FROM imployee_reports";

if ($startDate && $endDate) {
    $sql .= " WHERE Reg_Date BETWEEN '$startDate' AND '$endDate'";
}

$result = $conn->query($sql);

// Start HTML
echo "<!DOCTYPE html>
<html lang='fa'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>جدول اطلاعات</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
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
        }
        .btn-delete {
            background-color: red; /* Red for delete */
        }
        .btn-update {
            background-color: green; /* Green for update */
        }
        .search-form {
            text-align: center;
            margin-bottom: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        .search-form input[type='date'] {
            padding: 10px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 150px;
        }
        .search-form button {
            padding: 10px 15px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .search-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>لیست اطلاعات ثبت‌ کارمندان</h2>

    <form method='POST' class='search-form'>
        <input type='date' name='start_date' value='$startDate' required>
        <input type='date' name='end_date' value='$endDate' required>
        <button type='submit' name='search'>جستجو</button>
    </form>";

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
                <th>تاریخ ثبت گرازش</th>
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
                <td>" . $row["Reg_Date"] . "</td>
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
