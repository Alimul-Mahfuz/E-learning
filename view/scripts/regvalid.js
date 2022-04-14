function validate() {
    //errFlag track the error of the input field and prevent the submission of the from
    //by returning false
    var errFlag = false;

    //Regular expression string to validate phone number
    var pregx = /^(?:(?:\+|00)88|01)?\d{11}$/;
    //Function to display error message
    function showError(id) {
        id.style.color = 'red';
        id.style.display = 'block';
        errFlag = true;
    }
    var fname = document.getElementById('fname');
    var lname = document.getElementById('lname');
    var email = document.getElementById('email');
    var phone = document.getElementById('phone');
    var password = document.getElementById('password');
    var rePass = document.getElementById('rePass');
    var urole = document.getElementById('urole');
    if (fname.value === '') {
        let fid = document.getElementById('fnameErr');
        showError(fid);
    }
    if (fname.value != '') {
        let fid = document.getElementById('fnameErr');
        fid.style.display = 'none';
    }
    if (lname.value === '') {
        let fid = document.getElementById('lnameErr');
        showError(fid);
    }
    if (lname.value != '') {
        let fid = document.getElementById('fnameErr');
        fid.style.display = 'none';
        console.log(lname.value);
    }
    if (email.value === '') {
        let fid = document.getElementById('emailErr');
        showError(fid);
    }
    if (email.value != '') {
        let fid = document.getElementById('emailErr');
        fid.style.display = 'none';
    }
    if (phone.value === '') {
        let fid = document.getElementById('phoneErr');
        showError(fid);
    }
    if (phone.value != '') {
        if (!phone.value.match(pregx)) {
            let peid = document.getElementById('phoneErr');
            peid.style.color = 'red';
            peid.style.display = 'block';
            peid.textContent = 'Enter a valid Bangladeshi phone number in 11 digit';
            errFlag = true;
        }
        else {
            let fid = document.getElementById('phoneErr');
            fid.style.display = 'none';
        }
    }
    if (password.value == '') {
        let fid = document.getElementById('passErr');
        showError(fid);
    }
    if (password.value != '') {
        let fid = document.getElementById('passErr');
        fid.style.display = 'none';
    }
    if (rePass.value == '') {
        let fid = document.getElementById('repassErr');
        showError(fid);

    }
    if (rePass.value != '') {
        let peid = document.getElementById('repassErr');
        if (!rePass.value.match(password.value)) {
            peid.style.color = 'red';
            peid.style.display = 'block';
            peid.textContent = 'Passwrod did not matched with retyped password!';
            errFlag = true;
        }
        else {
            peid.style.display = 'none';
        }
    }
    if (urole.value == '') {
        let fid = document.getElementById('roleErr');
        showError(fid);
    }
    if (urole.value != '') {
        let fid = document.getElementById('roleErr');
        fid.style.display = 'none';
    }
    console.log(urole.value);
    console.log(errFlag);

    if (errFlag) {
        return false;
    }
    if (!errFlag) {
        i
        return true;
    }
}