<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ورود</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden; /* حذف اسکرول */
        }
        .login-container {
            background: white;
            padding: 30px; /* Adjusted padding for a better look */
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px; /* Increased max width for better form size */
            box-sizing: border-box;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: DodgerBlue;
            font-size: 24px; /* Increased font size */
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px; /* Increased space between form groups */
            width: 100%;
            direction: rtl;
            position: relative; /* Position relative for the eye icon */
        }
        .form-group label {
            margin-bottom: 5px;
            color: #333;
            font-weight: bold; /* Bold labels for better readability */
        }
        .form-group input {
            width: 100%;
            padding: 12px; /* Increased padding for better touch target */
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
            font-size: 16px; /* Increased font size for input */
        }
        .form-group input:focus {
            border-color: #3a6073;
            outline: none;
        }
        .eye-icon {
            position: absolute;
            left: 0px; /* Position eye icon to the left */
            top: 63%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #3a6073; /* Color for the eye icon */
            font-size: 18px; /* Increased icon size */
        }
        .remember-me {
            display: flex;
            align-items: center;
            direction: rtl;
        }
        .remember-me input {
            margin-right: 10px;
        }
        .login-button {
            width: 100%;
            padding: 12px; /* Increased padding for better touch target */
            background-color: #3a6073;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px; /* Increased font size for button */
        }
        .login-button:hover {
            background-color: #2b4a51;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <h2>ورود به سیستم</h2>
        <form action="/login" method="post">
            <div class="form-group">
                <label for="username">نام کاربر</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">رمز عبور</label>
                <input type="password" id="password" name="password" required>
                <i class="fas fa-eye eye-icon" id="togglePassword"></i> <!-- آیکن چشم -->
            </div>
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">من را به یاد داشته باشید</label>
            </div>
            <button type="submit" class="login-button">ورود به سیستم</button>
        </form>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            // Toggle the password visibility
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;

            // Toggle the icon class
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
