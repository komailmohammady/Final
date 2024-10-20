// Client-side validation for password match
document.getElementById('registrationForm').addEventListener('submit', function (event) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;

    // Check if passwords match
    if (password !== confirmPassword) {
        alert('Passwords do not match');
        event.preventDefault(); // Prevent form submission
    }
});

// Validate form before submission
function validateForm() {
    let isValid = true;

    // Clear previous error messages
    document.querySelectorAll('.error-message').forEach(function (el) {
        el.textContent = '';
    });

    // Validate ID
    let id = document.getElementById('UserName').value;
    if (id === '') {
        document.getElementById('idError').textContent = 'آی دی الزامی است.';
        isValid = false;
    }

    // Validate Name
    let name = document.getElementById('Report').value;
    if (name === '') {
        document.getElementById('nameError').textContent = 'اسم الزامی است.';
        isValid = false;
    }

    // Validate Last Name
    let lastName = document.getElementById('Time').value;
    if (lastName === '') {
        document.getElementById('lastNameError').textContent = 'تخلص الزامی است.';
        isValid = false;
    }

    // Validate Father's Name
    let fatherName = document.getElementById('Plane').value;
    if (fatherName === '') {
        document.getElementById('fatherNameError').textContent = 'ولد الزامی است.';
        isValid = false;
    }

    // Validate Username
    let user = document.getElementById('persent').value;
    if (user === '') {
        document.getElementById('userError').textContent = 'کاربر الزامی است.';
        isValid = false;
    }

    // Validate Password
    let password = document.getElementById('state').value;
    if (password.length < 8) {
        document.getElementById('passwordError').textContent = 'رمز عبور باید حداقل ۸ حرف باشد.';
        isValid = false;
    }

    // Validate Confirm Password
    let confirmPassword = document.getElementById('prob').value;
    if (password !== confirmPassword) {
        document.getElementById('confirmPasswordError').textContent = 'رمز عبور مطابقت ندارد.';
        isValid = false;
    }

    // Validate Post Type
    let postType = document.getElementById('solve').value;
    if (postType === '') {
        document.getElementById('postTypeError').textContent = 'عنوان بست الزامی است.';
        isValid = false;
    }

    // Validate Job Type
    let jobType = document.getElementById('signature').value;
    if (jobType === '') {
        document.getElementById('jobTypeError').textContent = 'نوعیت وظیفه الزامی است.';
        isValid = false;
    }

    // Validate Post No
    let postNo = document.querySelector('select[name="Post_No"]').value;
    if (postNo === '') {
        document.getElementById('postNoError').textContent = 'بست الزامی است.';
        isValid = false;
    }

    // Validate Department
    let department = document.querySelector('select[name="Relevant_Department"]').value;
    if (department === '') {
        document.getElementById('departmentError').textContent = 'آمریت مربوطه الزامی است.';
        isValid = false;
    }

    // If everything is valid, return true. Otherwise, false.
    return isValid;
}

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