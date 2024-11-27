document.addEventListener('DOMContentLoaded', function() {
    var loginForm = document.getElementById('loginForm');
    var roleSelect = document.getElementById('role');
    var errorMessage = document.getElementById('errorMessage');

    loginForm.addEventListener('submit', function(event) {
        // Prevent form submission
        event.preventDefault();

        // Get selected role
        var selectedRole = roleSelect.value;

        // Get username and password inputs
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Check if selected role is "Trainer" and username/password is incorrect
        if (selectedRole === 'trainer' && (username !== 'correct_username' || password !== 'correct_password')) {
            // Display error message
            errorMessage.textContent = 'Invalid username or password.';
            errorMessage.style.display = 'block';
        } else {
            // Submit the form
            loginForm.submit();
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var roleSelect = document.getElementById('role');

    roleSelect.addEventListener('click', function() {
        roleSelect.classList.toggle('active');
    });
});
