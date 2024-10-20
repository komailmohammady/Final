<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>فورم راجستر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/Employee_Report.css">
    <script src="../js/script.js"></script>
    <style>
        .form-control {
            height: 40px;
        }
        .form-control {
            height: 40px;
        }
        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
=======
<<<<<<< HEAD
    <title>فورم راجستر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/Employee_Report.css">
    
    <style>
        .form-control {
            height: 40px;
        }
    </style>
=======
    <title>فورم راجستر </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/Employee_Report.css">

    

>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
</head>
<body dir="rtl">

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
<<<<<<< HEAD
        <h2><b>فرم ثبت کارمندان ریاست امور متعلمین و محصلین</b></h2>
=======
        <h2><b>فورم راجستر</b></h2>
<<<<<<< HEAD
=======
        <!-- دکمه بستن (چلیپا) -->
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
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
<<<<<<< HEAD
                <input type="text" id="Plane" name="F_Name" class="form-control">
                <div id="fatherNameError" class="error-message"></div>
=======
<<<<<<< HEAD
                <input type="text" id="Plane" name="F_Name" class="form-control">
=======
                <input type="text" id="Plane" name="ّF_Name" class="form-control">
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
            </div>

            <div class="form-col">
                <label for="persent">کاربر</label>
                <input type="text" id="persent" name="user" class="form-control">
                <div id="userError" class="error-message"></div>
            </div>

<<<<<<< HEAD
            <div class="form-col position-relative">
                <label for="state">رمز عبور</label>
                <input type="password" id="state" name="Password" class="form-control">
=======
<<<<<<< HEAD
            <div class="form-col position-relative">
                <label for="state">رمز عبور</label>
                <input type="password" id="state" name="Password" class="form-control">
=======
            <!-- Password Input with Show/Hide Icon -->
            <div class="form-col position-relative">
                <label for="state">رمز عبور</label>
                <input type="password" id="state" name=" Password" class="form-control">
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
                <i class="bi bi-eye-slash position-absolute top-50 start-0 me-2 toggle-icon" style="cursor: pointer;margin-left:10px;margin-top:5px;" id="togglePassword1" onclick="togglePassword('state', 'togglePassword1')"></i>
                <div id="passwordError" class="error-message"></div>
            </div>
        </div>

        <div class="form-row">
<<<<<<< HEAD
=======
<<<<<<< HEAD
            <div class="form-col position-relative">
                <label for="prob">تایید رمز عبور</label>
                <input type="password" id="prob" name="Confirm_Password" class="form-control">
=======
            <!-- Confirm Password Input with Show/Hide Icon -->
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
            <div class="form-col position-relative">
                <label for="prob">تایید رمز عبور</label>
                <input type="password" id="prob" name="Conform_Password" class="form-control">
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
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
<<<<<<< HEAD
                <input type="text" id="signature" name="Job_type" class="form-control">
                <div id="jobTypeError" class="error-message"></div>
=======
<<<<<<< HEAD
                <input type="text" id="signature" name="Job_type" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label for="Post_No">بست</label>
                <select name="Post_No" class="form-control">
=======
                <input type="text" id="signature" name="Job_type " class="form-control">
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
            </div>
        </div>

        <div class="form-row">
<<<<<<< HEAD
        <div class="form-col">
                <label for="Post_No">بست</label>
                <select name="Post_No" class="form-control">
                    <option value="بست اول">بست اول</option>
                    <option value="بست دوم">بست دوم</option>
                    <option value="بست سوم">بست سوم</option>
                    <option value="بست چهارم">بست چهارم</option>
                    <option value="بست پنجم">بست پنجم</option>
=======
            <div class="thired">
                <label for="name">بست</label>
                <select name="Post_No" id="">
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
                    <option value="">بست اول</option>
                    <option value="">بست دوم</option>
                    <option value="">بست سوم</option>
                    <option value="">بست چهارم</option>
                    <option value="">بست پنجم</option>
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
                </select>
                <div id="postNoError" class="error-message"></div>
            </div>

<<<<<<< HEAD
            <div class="form-col">
                <label for="Relevant_Department">آمریت مربوطه</label>
                <select name="Relevant_Department" class="form-control">
                    <option value="آمریت امور مکاتب">آمریت امور مکاتب</option>
                    <option value="آمریت نتایج">آمریت نتایج</option>
                    <option value="آمریت تعلیمات خاص">آمریت تعلیمات خاص</option>
                    <option value="آمریت امور تنظیم لیله ها">آمریت امور تنظیم لیلیه ها</option>
=======
<<<<<<< HEAD
            <div class="form-col">
                <label for="Relevant_Department">آمریت مربوطه</label>
                <select name="Relevant_Department" class="form-control">
=======
            <div class="first">
                <label for="name">آمریت مربوطه</label>
                <select name="Relevant_Department" id="">
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
                    <option value="">آمریت امور مکاتب</option>
                    <option value="">آمریت نتایج</option>
                    <option value="">آمریت تعلیمات خاص</option>
                    <option value="">آمریت امور تنظیم لیلیه ها</option>
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
                </select>
                <div id="departmentError" class="error-message"></div>
            </div>

<<<<<<< HEAD
            <div class="form-col">
                <label for="Observation">ملاحضات</label>
                <textarea name="Observation" id="Observation" class="form-control"></textarea>
=======
<<<<<<< HEAD
            <div class="form-col">
                <label for="Observation">ملاحضات</label>
                <textarea name="Observation" id="Observation" class="form-control"></textarea>
=======
            <div class="thired">
                <label for="name">ملاحضات</label>
                <textarea name="Observation" id=""></textarea>
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
            </div>
        </div>

        <div class="form-row" style="justify-content: center;">
<<<<<<< HEAD
            <button type="submit">ثبت کارمند</button>
=======
<<<<<<< HEAD
            <button type="submit" value="Post" class="btn btn-primary">راجستر</button>
=======
            <button type="submit" value="Post"> راجستر</button>
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<<<<<<< HEAD
=======
<!-- JavaScript to handle form functionality -->
<script>
<<<<<<< HEAD
=======
        // Function to navigate back
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
        function closeForm() {
            window.location.href = "../index.php";
        }

<<<<<<< HEAD
=======
        // Function to toggle password visibility
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
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
<<<<<<< HEAD
</script>
=======
    </script>
>>>>>>> 611f05667c9aa7d880a27fda04f50c9ef6ebfdcd
>>>>>>> 43269a35badf523902af525aacd1dec7bf7551d8
</html>
