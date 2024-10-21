<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ورود به سیستم</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/login.css">
</head>
<body dir="rtl">

<div class="login-container">
    <h2>ورود به حساب کاربری</h2>
    <form method="post" action="LoginConnection.php">
        <div class="mb-3 position-relative">
            <label for="user" class="form-label">نام کاربری</label>
            <input type="text" class="form-control" id="user" name="user">
            <div class="text-danger"><?php echo $userError; ?></div>
        </div>
        <div class="mb-3 position-relative">
            <label for="password" class="form-label">رمز عبور</label>
            <input type="password" class="form-control" id="password" name="Password" autocomplete="off">
            <i class="bi bi-eye-slash toggle-password" id="togglePassword" onclick="togglePassword()"></i>
            <div class="text-danger"><?php echo $passwordError; ?></div>
        </div>
        <div class="mb-3 form-check d-flex align-items-center">
            <input type="checkbox" class="form-check-input me-2" id="rememberMe" name="rememberMe">
            <label class="form-check-label" for="rememberMe">مرا به خاطر بسپار</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block w-100">ورود</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('togglePassword');

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.classList.remove("bi-eye-slash");
            toggleIcon.classList.add("bi-eye");
        } else {
            passwordInput.type = "password";
            toggleIcon.classList.remove("bi-eye");
            toggleIcon.classList.add("bi-eye-slash");
        }
    }
</script>
</body>
</html>
