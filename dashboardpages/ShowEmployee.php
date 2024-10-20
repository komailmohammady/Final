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
    $conn->query("DELETE FROM register_form WHERE id = $id");
}

// Fetch data from the register_form table
$sql = "SELECT id, Name, Last_Name, F_Name, user, Post_type, Job_type, Post_No, Relevant_Department, Observation FROM register_form";
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
    </style>
</head>
<body>
    <h2>لیست اطلاعات ثبت‌ کارمندان</h2>";

if ($result->num_rows > 0) {
    // Start HTML table
    echo "<table>
            <tr>
                <th>آی دی</th>
                <th>اسم</th>
                <th>تخلص</th>
                <th>ولد</th>
                <th>نام کاربر</th>
                <th>بست</th>
                <th>نوع بست</th>
                <th>نمبر بست</th>
                <th>آمریت مربوطه</th>
                <th>ملاحظات</th>
                <th>حذف</th>
                <th>ویرایش</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["Name"] . "</td>
                <td>" . $row["Last_Name"] . "</td>
                <td>" . $row["F_Name"] . "</td>
                <td>" . $row["user"] . "</td>
                <td>" . $row["Post_type"] . "</td>
                <td>" . $row["Job_type"] . "</td>
                <td>" . $row["Post_No"] . "</td>
                <td>" . $row["Relevant_Department"] . "</td>
                <td>" . $row["Observation"] . "</td>
                <td>
                    <form method='POST' style='display:inline;'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <button class='btn btn-delete' name='delete'>حذف</button>
                    </form>
                </td>
                <td>
                    <form method='GET' action='EmployeeRegister.php' style='display:inline;'>
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
