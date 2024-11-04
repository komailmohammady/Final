<?php
include 'PHP/ConnectionToDatabase.php'; // Adjust this path based on your directory structure

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $delete_sql = "DELETE FROM messages WHERE id = ?";
    $delete_stmt = $conn->prepare($delete_sql);
    $delete_stmt->bind_param("i", $delete_id);
    $delete_stmt->execute();
    $delete_stmt->close();
    header("Location: messages.php"); // Redirect after deletion
    exit;
}

// Fetch messages
$sql_messages = "SELECT id, message FROM messages ORDER BY date_sent DESC"; // Add id to select
$result_messages = $conn->query($sql_messages);
$messages = [];
if ($result_messages->num_rows > 0) {
    while ($row_message = $result_messages->fetch_assoc()) {
        $messages[] = $row_message; // Store the entire row
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پیام‌ها</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 50px;
        }
        h3 {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            color: #007bff;
        }
        .list-group-item {
            border: none;
            padding: 15px;
            font-size: 1.1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .list-group-item:nth-child(odd) {
            background-color: #f1f1f1;
        }
        .list-group-item:hover {
            background-color: #e9ecef;
        }
        .back-button {
            margin-top: 20px;
        }
    </style>
</head>
<body dir="rtl">
<div class="container mt-5">
    <h3>پیام‌های ریاست به کارمندان</h3>
    <ul class="list-group mt-3">
        <?php foreach ($messages as $msg): ?>
            <li class="list-group-item">
                <span><?php echo htmlspecialchars($msg['message']); ?></span>
                <div>
                    <a href="update_message.php?id=<?php echo $msg['id']; ?>" class="btn btn-warning btn-sm">ویرایش</a>
                    <a href="?delete_id=<?php echo $msg['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('آیا مطمئن هستید که می‌خواهید این پیام را حذف کنید؟');">حذف</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php" class="btn btn-primary back-button">بازگشت به داشبورد</a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
