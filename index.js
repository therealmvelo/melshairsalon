function validateRegistrationForm() {

    //clears the prev message for new one
    clearErrorMessages();

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var pass = document.getElementById("pass").value;
    var uimage = document.getElementById("uimage").value;

    //name textbox validation
    if (name.trim() === "") {
        showError("nameError", "Please enter your name.");
        return;
    }
   //email textbox validation
    if (email.trim() === "") {
        showError("emailError", "Please enter your email.");
        return;
    } else if (!validateEmail(email)) {
        showError("emailError", "Please enter a valid email address.");
        return;
    }
   //phonenumber textbox validation
        //if empty
    if (phone.trim() === "") {
        showError("phoneError", "Please enter your phone number.");
        return;
        //if less than 10 or include letters
    } else if (isNaN(phone) || phone.length !== 10) {
        showError("phoneError", "Please enter a valid 10-digit phone number.");
        return;
    }
   //pasword textbox validation
        //if empty
    if (pass.trim() === "") {
        showError("passError", "Please enter your password.");
        return;
        //if less than 6 letters
    } else if (pass.length < 6) {
        showError("passError", "Password must be at least 6 characters.");
        return;
    }
   //image input validation
        //if empty
    if (uimage.trim() === "") {
        showError("uimageError", "Please select a user image.");
        return;
    }
    //pass each element for checking
    document.getElementById("registrationForm").submit();
}

//imail validation w reg exp//
function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

//show error message upon submit
function showError(elementId, message) {
    document.getElementById(elementId).textContent = message;
    alert(message);
}

//remove error message after required input is obtained
function clearErrorMessages() {
    var errorMessages = document.querySelectorAll(".error-message");
    errorMessages.forEach(function(element) {
        element.textContent = "";
    });
}