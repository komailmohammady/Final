<?php
session_start(); // شروع جلسه برای استفاده از سشن‌ها

// متغیرها برای نگهداری خطاها
$userError = "";
$passwordError = "";

// اتصال به دیتابیس
$servername = "localhost";  // نام سرور
$username = "root";         // نام کاربری دیتابیس
$password = "";             // رمز عبور دیتابیس
$dbname = "finalproject";    // نام دیتابیس

$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال به دیتابیس ناموفق بود: " . $conn->connect_error);
}

// بررسی ارسال فرم
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST["user"]);
    $password = trim($_POST["Password"]);

    // اعتبارسنجی نام کاربری
    if (empty($user)) {
        $userError = "لطفا نام کاربری خود را وارد کنید.";
    }

    // اعتبارسنجی رمز عبور
    if (empty($password)) {
        $passwordError = "لطفا رمز عبور خود را وارد کنید.";
    }

    // اگر هیچ خطایی وجود نداشته باشد
    if (empty($userError) && empty($passwordError)) {
        // جستجوی کاربر در دیتابیس با ستون‌های user و Password
        $sql = "SELECT user, Password FROM register_form WHERE user = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // بررسی رمز عبور
            $userData = $result->fetch_assoc();
            
            // بررسی رمز عبور
            if (password_verify($password, $userData['Password'])) {
                // هدایت به صفحه اصلی
                header("Location: index.php");
                exit();
            } else {
                $_SESSION['passwordError'] = "رمز عبور اشتباه است.";
            }
        } else {
            $_SESSION['userError'] = "این نام کاربری ثبت نشده است.";
        }
    }

    // ذخیره خطاها در سشن و بازگشت به صفحه ورود
    $_SESSION['userError'] = $userError;
    $_SESSION['passwordError'] = $passwordError;
    header("Location: login.php");
    exit();
}

$conn->close();
?>
