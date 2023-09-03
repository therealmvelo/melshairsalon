function validateLoginForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("pass").value;

    if (email.trim() === "") {
        alert("Please enter your email.");
        return;
    }

    if (password.trim() === "") {
        alert("Please enter your password.");
        return;
    }

    document.getElementById("loginForm").submit();
}