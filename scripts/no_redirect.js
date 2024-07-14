document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
        submitForm(this);
    });

    document.getElementById('signupForm').addEventListener('submit', function(e) {
        e.preventDefault();
        submitForm(this);
    });

    document.getElementById('appointmentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        submitForm(this);
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
                            break;
                        case 'signupForm':
                            alert("Signup successful!");
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
});