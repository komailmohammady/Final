<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فورم راجستر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/Employee_Report.css">
    <style>
        .form-control {
            height: 40px;
        }
        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body dir="rtl">

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2><b>فورم راجستر</b></h2>
        <button type="button" class="btn-close" aria-label="Close" onclick="closeForm()" style="transform: rotate(180deg);"></button>
    </div>

    <form action="../PHP/EmployeeRegisterAddCodes.php" method="post" id="form" onsubmit="return validateForm()">
        <div class="form-row">
            <div class="form-col">
                <label for="UserName">آي دی</label>
                <input type="number" id="UserName" name="id" class="form-control">
                <div id="idError" class="error-message"></div>
            </div>

            <div class="form-col">
                <label for="Report">اسم</label>
                <input type="text" id="Report" name="Name" class="form-control">
                <div id="nameError" class="error-message"></div>
            </div>

            <div class="form-col">
                <label for="Time">تخلص</label>
                <input type="text" id="Time" name="Last_Name" class="form-control">
                <div id="lastNameError" class="error-message"></div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label for="Plane">ولد</label>
                <input type="text" id="Plane" name="F_Name" class="form-control">
                <div id="fatherNameError" class="error-message"></div>
            </div>

            <div class="form-col">
                <label for="persent">کاربر</label>
                <input type="text" id="persent" name="user" class="form-control">
                <div id="userError" class="error-message"></div>
            </div>

            <div class="form-col position-relative">
                <label for="state">رمز عبور</label>
                <input type="password" id="state" name="Password" class="form-control">
                <i class="bi bi-eye-slash position-absolute top-50 start-0 me-2 toggle-icon" style="cursor: pointer;margin-left:10px;margin-top:5px;" id="togglePassword1" onclick="togglePassword('state', 'togglePassword1')"></i>
                <div id="passwordError" class="error-message"></div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-col position-relative">
                <label for="prob">تایید رمز عبور</label>
                <input type="password" id="prob" name="Conform_Password" class="form-control">
                <i class="bi bi-eye-slash position-absolute top-50 start-0 me-3 toggle-icon" style="cursor: pointer;margin-left:10px;margin-top:5px;" id="togglePassword2" onclick="togglePassword('prob', 'togglePassword2')"></i>
                <div id="confirmPasswordError" class="error-message"></div>
            </div>

            <div class="form-col">
                <label for="solve">عنوان بست</label>
                <input type="text" id="solve" name="Post_type" class="form-control">
                <div id="postTypeError" class="error-message"></div>
            </div>

            <div class="form-col">
                <label for="signature">نوعیت وظیفه</label>
                <input type="text" id="signature" name="Job_type" class="form-control">
                <div id="jobTypeError" class="error-message"></div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label for="Post_No">بست</label>
                <select name="Post_No" class="form-control">
                    <option value="بست اول">بست اول</option>
                    <option value="بست دوم">بست دوم</option>
                    <option value="بست سوم">بست سوم</option>
                    <option value="بست چهارم">بست چهارم</option>
                    <option value="بست پنجم">بست پنجم</option>
                </select>
                <div id="postNoError" class="error-message"></div>
            </div>

            <div class="form-col">
                <label for="Relevant_Department">آمریت مربوطه</label>
                <select name="Relevant_Department" class="form-control">
                    <option value="آمریت امور مکاتب">آمریت امور مکاتب</option>
                    <option value="آمریت نتایج">آمریت نتایج</option>
                    <option value="آمریت تعلیمات خاص">آمریت تعلیمات خاص</option>
                    <option value="آمریت امور تنظیم لیلیه ها">آمریت امور تنظیم لیلیه ها</option>
                </select>
                <div id="departmentError" class="error-message"></div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label for="Observation">ملاحضات</label>
                <textarea name="Observation" id="Observation" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-row" style="justify-content: center;">
            <button type="submit" class="btn btn-primary">راجستر</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function closeForm() {
        window.location.href = "../index.php";
    }

    function togglePassword(id, iconId) {
        const passwordInput = document.getElementById(id);
        const toggleIcon = document.getElementById(iconId);

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.classList.add("bi-eye");
            toggleIcon.classList.remove("bi-eye-slash");
        } else {
            passwordInput.type = "password";
            toggleIcon.classList.add("bi-eye-slash");
            toggleIcon.classList.remove("bi-eye");
        }
    }
</script>
</body>
</html>
