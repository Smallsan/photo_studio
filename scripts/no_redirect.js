document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
        if (validateLoginForm(this)) {
            submitForm(this);
        }
    });

    document.getElementById('signupForm').addEventListener('submit', function(e) {
        e.preventDefault();
        if (validateSignupForm(this)) {
            submitForm(this);
        }
    });

    document.getElementById('appointmentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        if (validateAppointmentForm(this)) {
            submitForm(this);
        }
    });

    function submitForm(form) {
        var formData = new FormData(form);

        fetch(form.action, {
                method: 'POST',
                body: formData,
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                if (data.includes("success")) {
                    switch (form.id) {
                        case 'loginForm':
                            alert("Login successful!");
                            window.location.reload();
                            break;
                        case 'signupForm':
                            alert("Signup successful!");
                            window.location.reload();
                            break;
                        case 'appointmentForm':
                            alert("Appointment booked successfully!");
                            break;
                    }
                } else {
                    alert("There was an issue with the submission.");
                }
                form.reset();
            })
            .catch(error => {
                console.error('Error:', error);
                alert("There was an error submitting the form.");
            });
    }

    function validateLoginForm(form) {
        return true;
    }
    function validateSignupForm(form) {
        var password = form.querySelector('#password').value;
        var confirmPassword = form.querySelector('#confirmPassword').value;
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        var username = form.querySelector('#username').value;
        var email = form.querySelector('#email').value; 

    
        return true;
    }
    function validateAppointmentForm(form) {
        var name = form.querySelector('#name').value.trim();
        var email = form.querySelector('#email').value.trim();
        var phone = form.querySelector('#phone').value.trim();
        var date = form.querySelector('#date').value;
        var time = form.querySelector('#time').value;
        var currentDate = new Date().toISOString().split('T')[0];
    
        if (name.length < 2) {
            alert("Please enter a name with at least 2 characters.");
            return false;
        }
    
        if (date < currentDate) {
            alert("Please select a future date for the appointment.");
            return false;
        }
        return true;
    }
});