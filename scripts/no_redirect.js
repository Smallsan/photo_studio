document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("loginForm").addEventListener("submit", function (e) {
    e.preventDefault();
    if (validateLoginForm(this)) {
      submitForm(this);
    }
  });

  document
    .getElementById("signupForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      if (validateSignupForm(this)) {
        submitForm(this);
      }
    });

  document
    .getElementById("appointmentForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      if (validateAppointmentForm(this)) {
        submitForm(this);
      }
    });

  function submitForm(form) {
    var formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        return response.text();
      })
      .then((data) => {
        if (data.includes("success")) {
          switch (form.id) {
            case "loginForm":
              alert("Login successful!");
              window.location.reload();
              break;
            case "signupForm":
              alert("Signup successful!");
              window.location.reload();
              break;
            case "appointmentForm":
              alert("Appointment booked successfully!");
              break;
            default:
              alert("Unknown form submitted.");
          }
        } else {
          alert("There was an issue with the submission.");
        }
        form.reset();
      })
      .catch((error) => {
        console.error("Error:", error);
        alert("There was an error submitting the form.");
      });
  }

  function validateLoginForm(form) {
    return true;
  }
  function validateSignupForm(form) {
    var password = form.querySelector("#signupPassword").value;
    var confirmPassword = form.querySelector("#signupConfirmPassword").value;
    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }

    var birthday = form.querySelector("#signupBirthday").value;
    var birthdayDate = new Date(birthday);
    var today = new Date();
    var age = today.getFullYear() - birthdayDate.getFullYear();
    var m = today.getMonth() - birthdayDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthdayDate.getDate())) {
      age--;
    }

    if (age < 18) {
      alert("You must be at least 18 years old.");
      return false;
    }

    var fullname = form.querySelector("#signupName").value;
    var username = form.querySelector("#signupUsername").value;
    var letterRegex = /^[A-Za-z]+$/;
    if (!letterRegex.test(username)) {
      alert("Username must contain only letters.");
      return false;
    }
    if (!letterRegex.test(fullname)) {
      alert("Fullname must contain only letters.");
      return false;
    }

    var email = form.querySelector("#signupEmail").value;
    var emailRegex = /\.com$/;
    if (!emailRegex.test(email)) {
      alert("Email must end with .com.");
      return false;
    }

    var phone = form.querySelector("#signupPhone").value;
    var phoneRegex = /^\(\d{3}\) \d{3}-\d{4}$/;
    if (!phoneRegex.test(phone)) {
      alert("Phone number must be in the format: (123) 456-7890");
      return false;
    }

    return true;
  }

  function validateAppointmentForm(form) {
    var date = form.querySelector("#date").value;
    var time = form.querySelector("#time").value;
    var currentDate = new Date().toISOString().split("T")[0];

    if (date < currentDate) {
      alert("Please select a future date for the appointment.");
      return false;
    } else if (date === currentDate) {
      var appointmentTime = new Date(date + "T" + time);
      var now = new Date();
      if (appointmentTime <= now) {
        alert("For today's appointments, please select a future time.");
        return false;
      }
    }
    return true;
  }
});
