function checkRegister() {
    var name = document.getElementById('userName').value;
    var password = document.getElementById('password').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phoneNumber').value;
    var address = document.getElementById('address').value;
    if (name === "" || password === '' || email === '' || phone === '' || address === '') {
        alert("You must enter all fields !");
        return false;
    } else if (name.length < 6 || name.length > 30) {
        alert("Your username must have at least 6 characters and at most 30 characters !");
        return false;
    } else if (password.length < 6 || password.length > 16) {
        alert("Your password must have at least 6 characters and at most 16 characters !");
        return false;
    } else if (phone.length < 9 || phone.length > 12) {
        alert("Your number phone have not correct !");
        return false;
    } else {
        return true;
    }
}

function checkLogin() {
    var name = document.getElementById('userNameLogin').value;
    var password = document.getElementById('passwordLogin').value;
    if (name === "" || password === "") {
        alert("You must enter all fields !");
        return false;
    } else {
        return true;
    }
}
