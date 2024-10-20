<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ورود</title>
    <style>
        body {
            font-family: Arial, sans-serif;
<<<<<<< HEAD
            background: linear-gradient(135deg, #3a6073, #3a606f);
=======
<<<<<<< HEAD
            background: linear-gradient(to right, #74ebd5, #acb6e5); /* Gradient background */
=======
            background: #f8f9fa;
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 50px;
        }
        .login-container {
<<<<<<< HEAD
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 320px;
=======
            background: white;
<<<<<<< HEAD
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 450px;
=======
            padding: 30px; /* Adjusted padding for a better look */
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px; /* Increased max width for better form size */
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
            box-sizing: border-box;
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
<<<<<<< HEAD
            color: #3a6073;
=======
            color: DodgerBlue;
<<<<<<< HEAD
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
=======
            font-size: 24px; /* Increased font size */
            font-weight: bold;
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
        }
        .form-group {
            margin-bottom: 15px;
            width: 300px;
            direction: rtl;
<<<<<<< HEAD
=======
            position: relative; /* Position relative for the eye icon */
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
            font-weight: bold; /* Bold labels for better readability */
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
<<<<<<< HEAD
=======
            font-size: 16px; /* Increased font size for input */
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
        }
        .form-group input:focus {
            border-color: #3a6073;
            outline: none;
        }
<<<<<<< HEAD
=======
        .eye-icon {
            position: absolute;
<<<<<<< HEAD
            left: 0px;
            top: 63%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #3a6073;
            font-size: 18px;
=======
            left: 0px; /* Position eye icon to the left */
            top: 63%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #3a6073; /* Color for the eye icon */
            font-size: 18px; /* Increased icon size */
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
        }
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
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
<<<<<<< HEAD
            padding: 10px;
=======
<<<<<<< HEAD
            padding: 12px;
=======
            padding: 12px; /* Increased padding for better touch target */
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
            background-color: #3a6073;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
<<<<<<< HEAD
=======
<<<<<<< HEAD
            font-size: 16px;
=======
            font-size: 16px; /* Increased font size for button */
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
        }
        .login-button:hover {
            background-color: #2b4a51;
        }
        .show-password {
           
            display: flex;
            align-items: center;
            margin-top: 5px; /* Adjust spacing */
        }
        .show-password input {
            margin-left: 5px; /* Adjust margin */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>ورود به سیستم</h2>
        <form action="/login" method="post">
            <div class="form-group">
<<<<<<< HEAD
                <label for="username">نام کاربر </label>
=======
                <label for="username">نام کاربر</label>
<<<<<<< HEAD
                <input type="text" id="username" name="username">
=======
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
                <input type="text" id="username" name="username" required>
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
            </div>
            <div class="form-group">
                <label for="password">رمز عبور</label>
                <input type="password" id="password" name="password">
                <div class="show-password">
                    <p>                
                    </p>
                <input type="checkbox" id="showPassword">
                </div>
            </div>
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">من را به یاد داشته باشید</label>
            </div>
            <button type="submit" class="login-button">ورود به سیستم</button>
        </form>
    </div>

    <script>
        const showPasswordCheckbox = document.getElementById('showPassword');
        const passwordInput = document.getElementById('password');

<<<<<<< HEAD
        showPasswordCheckbox.addEventListener('change', function() {
            passwordInput.type = this.checked ? 'text' : 'password';
=======
        togglePassword.addEventListener('click', function() {
<<<<<<< HEAD
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
=======
            // Toggle the password visibility
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;

            // Toggle the icon class
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
            this.classList.toggle('fa-eye-slash');
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
        });
    </script>
</body>
</html>