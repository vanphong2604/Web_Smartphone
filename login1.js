function Sign_in() {
    var email = document.getElementById("email-sign-in").value;
    var password = document.getElementById("password-sign-in").value;

    var error_login = document.getElementById('notify-login');
    if(email == "" || password == "") {
        error_login.innerHTML = "*Invalid login or password. Please try again.";
        return false;
    }
    location.href = 'home.php';
    return true;
}
function Sign_up(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var error_name = document.getElementById('notify-sign-up-name');
    var error_email = document.getElementById('notify-sign-up-email');
    var error_password = document.getElementById('notify-sign-up-password');
    
    if(name == "") {
        error_name.innerHTML = "*Name is required.";
    }
    if(email== "") {
        error_email.innerHTML = "*Email is required.";
    }
    if(password == "") {
        error_password.innerHTML = "*Password is required.";    
    }
    if(name && email && password) {
        location.href = 'home.php';
    }
}