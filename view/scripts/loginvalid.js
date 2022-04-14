function loginValidate() {
    var logErrFlag = false;
    var logEamail = document.getElementById('email');
    var logPassword = document.getElementById('password');
    if (logEamail.value === '') {
        let err = document.getElementById('emailErr');
        err.style.display = 'block';
        logErrFlag = true;
    }
    if (logEamail.value != '') {
        let err = document.getElementById('emailErr');
        err.style.display = 'none';
    }
    if (logPassword.value === '') {
        let err = document.getElementById('passErr');
        err.style.display = 'block';
        logErrFlag = true;
    }
    if (logPassword.value != '') {
        let err = document.getElementById('passErr');
        err.style.display = 'none';
    }

    if (!logErrFlag) {
        return true;
    }
    else {
        return false;
    }
}