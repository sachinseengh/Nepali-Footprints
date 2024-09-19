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


    const orderForm = document.getElementById('orderForm');

    if (orderForm) {
        orderForm.addEventListener('submit', function (event) {
            const name = document.getElementById('fname').value.trim();
            const email = document.getElementById('email').value.trim();
            const daddress = document.getElementById('daddress').value.trim();
            const phone = document.getElementById('phone').value.trim();
    
            const nameErr = document.querySelector('.nameErr');
            const emailErr = document.querySelector('.emailErr');
            const daddressErr = document.querySelector('.daddressErr');
            const phoneErr = document.querySelector('.phoneErr');
    
            let isValid = true;
    
            nameErr.textContent = '';
            emailErr.textContent = '';
            daddressErr.textContent = '';
            phoneErr.textContent = '';
    
            if (name === '') {
                isValid = false;
                nameErr.textContent = "Name field cannot be empty";
            }
    
            if (email === '') {
                isValid = false;
                emailErr.textContent = "Email field cannot be empty";
            }
    
            if (daddress === '') {
                isValid = false;
                daddressErr.textContent = "Address field cannot be empty";
            }
    
            if (phone === '') {
                isValid = false;
                phoneErr.textContent = "Phone field cannot be empty";
            }
    
            if (!isValid) {
                // Prevent form submission if validation fails
                event.preventDefault();
            } else {
                // Prevent form submission while waiting for SweetAlert confirmation
                event.preventDefault();
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-success",
                        cancelButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                });
    
                swalWithBootstrapButtons.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, place order!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {


                        const nameVal = document.getElementById('fname').value;
                        const emailVal = document.getElementById('email').value;
                        const daddressVal = document.getElementById('daddress').value;
                        const phoneVal = document.getElementById('phone').value;

                        // Submit the form manually after confirmation
                       
                        window.location.href = `./dashboard/Controller/placeOrder.php?fullname=${nameVal} & email=${email} & address=${daddressVal} & phone=${phoneVal}`;
                        
                       
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire({
                            title: "Cancelled",
                            text: "Your order has been cancelled.",
                            icon: "error"
                        });
                    }
                });
            }
        });
    }
    
    });
    

