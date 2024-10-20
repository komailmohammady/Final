// Client-side validation for password match
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;

    // Check if passwords match
    if (password !== confirmPassword) {
        alert('Passwords do not match');
        event.preventDefault(); // Prevent form submission
    }
});
