<?php
include 'PHP/ConnectionToDatabase.php'; // Adjust this path based on your directory structure

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $message_id = intval($_GET['id']);

    // Fetch the existing message
    $sql = "SELECT message FROM messages WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $message_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the message exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_message = $row['message'];
    } else {
        echo "پیام پیدا نشد.";
        exit;
    }

    $stmt->close();
} else {
    echo "آی دی مشخص نشده است.";
    exit;
}

// Handle form submission for updating the message
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $updated_message = $_POST['message'];

    // Update the message in the database
    $update_sql = "UPDATE messages SET message = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("si", $updated_message, $message_id);
    
    if ($update_stmt->execute()) {
        header("Location: messages.php"); // Redirect to messages page after updating
        exit;
    } else {
        echo "خطا در بروزرسانی پیام: " . $update_stmt->error;
    }

    $update_stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش پیام</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    </style>
</head>
<body dir="rtl">
<div class="container mt-5">
    <h3>ویرایش پیام</h3>
    <form action="update_message.php?id=<?php echo $message_id; ?>" method="post">
        <div class="mb-3">
            <label for="message" class="form-label">پیام</label>
            <textarea name="message" class="form-control" id="message" rows="3" required><?php echo htmlspecialchars($current_message); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">به‌روزرسانی پیام</button>
        <a href="messages.php" class="btn btn-secondary">برگشت به پیام‌ها</a>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
