document.addEventListener('DOMContentLoaded', function() {
    // For loginForm (if you have one on a different page)
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            
            if (email === '' || password === '') {
                event.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    text: 'Please fill in all fields.',
                    confirmButtonText: 'OK'
                });
            }
        });
    }

    // For registerForm
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(event) {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const city = document.getElementById('city').value.trim();
            const address = document.getElementById('address').value.trim();

            const emailErr = document.getElementById('emailErr');
            const passwordErr = document.getElementById('passwordErr');
            const nameErr = document.getElementById('nameErr');
            const phoneErr = document.getElementById('phoneErr');
            const cityErr = document.getElementById('cityErr');
            const addressErr = document.getElementById('addressErr');

            let isValid = true;

            // Clear previous errors
            emailErr.textContent = '';
            passwordErr.textContent = '';
            nameErr.textContent='';
            phoneErr.textContent = '';
            cityErr.textContent = '';
            addressErr.textContent = '';

            if (email === '') {
                emailErr.textContent = "Email field cannot be empty";
                isValid = false;
            }

            if (password === '') {
                passwordErr.textContent = "Password field cannot be empty";
                isValid = false;
            }
            if (name === '') {
                nameErr.textContent = "Name field cannot be empty";
                isValid = false;
            }

            if (phone === '') {
                phoneErr.textContent = "Phone field cannot be empty";
                isValid = false;
            }

            if (city === '') {
                cityErr.textContent = "City field cannot be empty";
                isValid = false;
            }

            if (address === '') {
                addressErr.textContent = "Address field cannot be empty";
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault(); // Prevent form submission
                Swal.fire({
                    icon: 'warning',
                    text: 'Please correct the errors before submitting.',
                    confirmButtonText: 'OK'
                });
            }
        });
    }
});
