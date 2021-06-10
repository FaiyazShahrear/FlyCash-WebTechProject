'use strict'
//Name Validation
function nameValidation(name) {

    var name = document.getElementById("Name").value;
    if (name === "") {
        alert("Enter Name");
        return false;


    } else {

        if (name.length < 3) {
            alert("Name Must Be 3 Character");
            //document.getElementById("Message").innerHTML = "Name Must Be 3 Character";
            return false;

        } else {

            if (name.length > 20) {
                alert("Name Must Be Less Then 20 Character");
                //document.getElementById("Message").innerHTML = "Name Must Be Less Then 20 Character";
                return false;
                //break;
            }
        }
    }
    return true;
}

//User Name Validation
function usernameValidation(username) {

    var username = document.getElementById("userName").value;
    if (username === "") {
        alert("Enter Your User Name");
        return false;

    } else {

        if (username.length < 4) {
            alert("User Name Must Be 4 Character");
            //document.getElementById("Message").innerHTML = "Name Must Be 3 Character";
            return false;

        } else {

            if (username.length > 9) {
                alert("User Name Must Be Less Then 9 Character");
                //document.getElementById("Message").innerHTML = "Name Must Be Less Then 20 Character";
                return false;
                //break;
            }
        }
    }
    return true;
}


//Email Validation
function emailValidation(email) {

    if (email.includes("@") && email.includes(".com")) {

        return true;

    } else {
        alert("Invalid Email");
        return false;
    }

}

//Account Number Validation
function accountNumberValidation(accountnumber) {
    var accountnumber = document.getElementById("accountNumber").value;
    if (isNaN(accountnumber)) {
        alert("Account Number Is Only Numeric Value");
        return false;
    }
    if (accountnumber.length < 11) {
        alert("Account Number Must Be 11 Digit");
        return false;
    }
    if (accountnumber.length > 11) {
        alert("Account Number Must Be 11 Digit");
        return false;
    }
    if ((accountnumber.charAt(0) != 0) || (accountnumber.charAt(1) != 1)) {
        alert("Enter A Valid Account Number");
        return false;
    }


    // if ((accountnumber.charAt(2) != 5) || (accountnumber.charAt(2) != 6)) {

    //     alert("Enter A Valid Account Number");
    //     return false;
    // }
    return true;
}
//|| (accountnumber.charAt(2) != 5) || (accountnumber.charAt(2) != 6) || (accountnumber.charAt(2) != 7) || (accountnumber.charAt(2) != 8) || (accountnumber.charAt(2) != 9)
//(accountnumber.charAt(1) != 1) &&
//(accountnumber.charAt(2) == 1) &&
//(accountnumber.charAt(2) == 2) &&
//(accountnumber.charAt(2) != 7) &&
//(accountnumber.charAt(2) != 9) &&
//(accountnumber.charAt(2) != 4) &&
//(accountnumber.charAt(2) != 3) &&
//(accountnumber.charAt(2) != 8) &&
//(accountnumber.charAt(2) != 6) &&
//(accountnumber.charAt(2) != 5)

//Nid Validation
function nidNumberValidation(nidnumber) {
    var nidnumber = document.getElementById("nidNumber").value;
    if (isNaN(nidnumber)) {
        alert("NID Number Is Only Numeric Value");
        return false;
    }
    if (nidnumber.length < 10) {
        alert("NID Number Must Be 10 Digit");
        return false;
    }
    if (nidnumber.length > 10) {
        alert("NID Number Must Be 10 Digit");
        return false;
    }
    return true;
}

//Password Validation
function passwordValidation(password, cpassword) {
    var password = document.getElementById("Password").value;
    var cpassword = document.getElementById("Cpassword").value;
    if (password != cpassword) {

        alert("Password & Confirm Password Doesn't Match");
        return false;

    } else {
        if (isNaN(password)) {
            alert("Password Is Only Numeric Value");
            return false;
        }
        if (password.length < 8) {
            alert("Password Must Be At least 8 Digit");
            return false;
        }
        if (password.length > 21) {
            alert("Password Must Be Less Then 20 Digit");
            return false;
        }
    }
    return true;
}

//New Password Validation
function newPasswordValidation(npassword, rnpassword) {
    var cpassword = document.getElementById("cpassword").value;
    var npassword = document.getElementById("npassword").value;
    var rnpassword = document.getElementById("rnpassword").value;
    if (npassword != rnpassword) {

        alert("New Password & Re-Type New Password Doesn't Match");
        return false;

    } else {

        if (cpassword === npassword) {
            alert("Previous Password Can't Be New Password");
            return false;
        }

        if (isNaN(npassword)) {
            alert("Password Is Only Numeric Value");
            return false;
        }
        if (npassword.length < 8) {
            alert("Password Must Be At least 8 Digit");
            return false;
        }
        if (npassword.length > 21) {
            alert("Password Must Be Less Then 20 Digit");
            return false;
        }
    }
    return true;
}

//Pin Validation
function pinValidation(pin) {
    var pin = document.getElementById("Pin").value;

    if (isNaN(pin)) {
        alert("PIN Is Only Numeric Value");
        return false;
    }
    if (pin.length < 4) {
        alert("PIN Must Be At least 4 Digit");
        return false;
    }
    if (pin.length > 6) {
        alert("PIN Must Be Less Then 6 Digit");
        return false;
    }
    return true;
}

//New Pin Validation
function newPinValidation(npin, rnpin) {
    var cpin = document.getElementById("cpin").value;
    var npin = document.getElementById("npin").value;
    var rnpin = document.getElementById("rnpin").value;
    if (npin != rnpin) {

        alert("New PIN & Re-Type New PIN Doesn't Match");
        return false;

    } else {

        if (cpin === npin) {
            alert("Previous PIN Can't Be New PIN");
            return false;
        }

        if (isNaN(npin)) {
            alert("PIN Is Only Numeric Value");
            return false;
        }
        if (npin.length < 4) {
            alert("PIN Must Be At least 4 Digit");
            return false;
        }
        if (npin.length > 6) {
            alert("PIN Must Be Less Then 6 Digit");
            return false;
        }
    }
    return true;
}


//Login Check
function loginCheck() {

    var submit = document.getElementById("Submit").value;

    var username = document.getElementById("userName").value;

    var password = document.getElementById("Password").value;

    if (username == "" || password == "") {
        alert("Please Fill All The Information");
        //document.getElementById('Message').innerHTML = "Please Fill All The Information";

    } else {

        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../../controller/merchant/loginCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                if (this.responseText != true) {
                    window.location = "dashboard.php";

                } else {
                    document.querySelector("#Message").innerHTML += this.responseText;
                }
            }
        }
        xhttp.send('submit=' + submit + '&username=' + username + '&password=' + password);
    }
}

//PIN Change Check
function pinChangeCheck() {

    var change = document.getElementById("change").value;

    var rnpin = document.getElementById("rnpin").value;

    var npin = document.getElementById("npin").value;

    var cpin = document.getElementById("cpin").value;

    if (rnpin == "" || cpin == "" || npin == "") {

        alert("Please Fill All The Information");
        //document.getElementById('response').innerHTML = "Please Fill all the information";

    } else {
        //document.getElementById('response').innerHTML = "Missing ";
        if (newPinValidation(npin, rnpin)) {

            var xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../../controller/merchant/pinchange.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    if (this.responseText == "PIN Changed") {

                        var result = this.responseText;
                        alert("PIN Changed");
                        //document.getElementById('Message').innerHTML = result;
                        window.location = "dashboard.php";

                        //window.stop();
                    } else {
                        var result = this.responseText;
                        alert("PIN Changed Failed");
                        //document.getElementById('Message').innerHTML = result;



                    }


                }
            }

            xhttp.send('change=' + change + '&npin=' + npin + '&cpin=' + cpin);

        }
    }

}

//Password Change Check
function passwordChangeCheck() {

    var change = document.getElementById("change").value;

    var rnpassword = document.getElementById("rnpassword").value;

    var npassword = document.getElementById("npassword").value;

    var cpassword = document.getElementById("cpassword").value;

    if (rnpassword == "" || cpassword == "" || npassword == "") {

        alert("Please Fill All The Information");
        //document.getElementById('response').innerHTML = "Please Fill all the information";

    } else {
        //document.getElementById('response').innerHTML = "Missing ";
        if (newPasswordValidation(npassword, rnpassword)) {

            var xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../../controller/merchant/passwordchange.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    if (this.responseText == "Password Changed") {

                        var result = this.responseText;
                        alert("Password Changed");
                        //document.getElementById('Message').innerHTML = result;
                        window.location = "dashboard.php";

                        //window.stop();
                    } else {
                        var result = this.responseText;
                        alert("Password Changed Failed");
                        //document.getElementById('Message').innerHTML = result;



                    }


                }
            }

            xhttp.send('change=' + change + '&npassword=' + npassword + '&cpassword=' + cpassword);

        }
    }

}

//Registration Check
function registrationCheck() {

    var name = document.getElementById("Name").value;
    var username = document.getElementById("userName").value;
    var email = document.getElementById("Email").value;
    var accountnumber = document.getElementById("accountNumber").value;
    var nidnumber = document.getElementById("nidNumber").value;
    var pin = document.getElementById("Pin").value;
    var password = document.getElementById("Password").value;
    var cpassword = document.getElementById("Cpassword").value;
    var gender = document.getElementById("Gender").value;
    var date_of_birth = document.getElementById("Date_of_birth").value;
    var submit = document.getElementById("Submit").value;



    if (name == "" || username == "" || email == "" || accountnumber == "" || nidnumber == "" || pin == "" || password == "" || cpassword == "" || gender == "" || date_of_birth == "") {

        //document.getElementById('Message').innerHTML = "Please Fill all the information";
        alert("Please Fill all the information")

    } else {

        if (nameValidation(name)) {

            if (usernameValidation(username)) {

                if (emailValidation(email)) {

                    if (accountNumberValidation(accountnumber)) {

                        if (nidNumberValidation(nidnumber)) {

                            if (pinValidation(pin)) {

                                if (passwordValidation(password, cpassword)) {

                                    var xhttp = new XMLHttpRequest();
                                    xhttp.open('POST', '../../controller/merchant/regCheck.php', true);
                                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                                    xhttp.onreadystatechange = function () {

                                        if (this.readyState == 4 && this.status == 200) {

                                            if (this.responseText == "Registration Successful") {

                                                var result = this.responseText;
                                                //var Message = result.fontcolor("green");
                                                //document.getElementById('Message').innerHTML = result;
                                                alert("Registration Successful");
                                                //window.location = "login.html";

                                            } else {
                                                var result = this.responseText;
                                                //var Message = result.fontcolor("red");
                                                //document.getElementById('Message').innerHTML = result;
                                                alert("Registration Failed");
                                            }
                                        }
                                    }

                                    xhttp.send('submit=' + submit + '&name=' + name + '&username=' + username + '&email=' + email + '&accountnumber=' + accountnumber + '&nidnumber=' + nidnumber + '&pin=' + pin + '&password=' + password + '&cpassword=' + cpassword + '&gender=' + gender + '&date_of_birth=' + date_of_birth);

                                }
                            }
                        }
                    }
                }
            }

        }

    }

}


//Edit Profile Check
function editProfileCheck() {
    var name = document.getElementById("Name").value;
    var username = document.getElementById("userName").value;
    var email = document.getElementById("Email").value;
    var nidnumber = document.getElementById("nidNumber").value;
    var gender = document.getElementById("Gender").value;
    var date_of_birth = document.getElementById("Date_of_birth").value;
    var submit = document.getElementById("Submit").value;

    if (name == "" || username == "" || email == "" || nidnumber == "" || gender == "" || date_of_birth == "") {

        //document.getElementById('response').innerHTML = "Please Fill all the information";
        alert("Please Fill All The Information");

    } else {
        if (nameValidation(name)) {

            if (usernameValidation(username)) {

                if (emailValidation(email)) {

                    if (nidNumberValidation(nidnumber)) {

                        var xhttp = new XMLHttpRequest();
                        xhttp.open('POST', '../../controller/merchant/editprofile.php', true);
                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                        xhttp.onreadystatechange = function () {

                            if (this.readyState == 4 && this.status == 200) {

                                if (this.responseText == "Profile Updated") {

                                    var result = this.responseText;
                                    //document.getElementById('Message').innerHTML = result;
                                    alert("Profile Updated");
                                    window.location = "dashboard.php";
                                    //window.stop();

                                } else {
                                    var result = this.responseText;
                                    //document.getElementById('Message').innerHTML = result;
                                    alert("Profile Updated Failed");
                                    window.stop();
                                }


                            }
                        }

                        xhttp.send('submit=' + submit + '&name=' + name + '&user_name=' + username + '&email=' + email + '&nid_number=' + nidnumber + '&gender=' + gender + '&date_of_birth=' + date_of_birth);

                    }

                }

            }
        }
    }

}