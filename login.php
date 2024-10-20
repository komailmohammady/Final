<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ورود</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #74ebd5, #acb6e5); /* Gradient background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden; /* حذف اسکرول */
        }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 450px;
            box-sizing: border-box;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: DodgerBlue;
            font-size: 40px;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
            width: 100%;
            direction: rtl;
            position: relative;
            padding: 10px;
            font-size: 20px;
        }
        .form-group label {
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
            font-size: 16px;
            margin-top: 10px;
        }
        .form-group input:focus {
            border-color: #3a6073;
            outline: none;
        }
        .eye-icon {
            position: absolute;
            left: 0px;
            top: 63%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #3a6073;
            font-size: 18px;
        }
        .remember-me {
            display: flex;
            align-items: center;
            direction: rtl;
        }
        .remember-me input {
            margin-right: 10px;
            font-weight: bold;
        }
        .login-button {
            width: 100%;
            padding: 12px;
            background-color: #3a6073;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
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
                <label for="username">نام کاربر </label>
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
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>