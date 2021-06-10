'use strict'

function validateName(name) {

    var name = document.getElementById("name").value;
    if (name === "") {
        alert("Enter a valid name");
        return false;
    } else {

        if (name.length < 3) {
            alert("Name can not be less than 3 character");
            return false;
        } else {
            if (name.length > 20) {
                alert("Name can not be longer than 20 character");
                return false;
            }
        }

    }
    return true;
}

function validateUsername(username) {

    var username = document.getElementById("username").value;
    if (username === "") {
        alert("Please enter your username");
        return false;
    } else {
        if (username.length < 3) {
            alert("Username can not be less than 4 characters");
            return false;
        } else {
            if (username.length > 9) {
                alert("Username can not be longer than 9 characters");
                return false;
            }
        }
    }
    return true;
}


function validateEmail(email) {

    if (email.includes("@") && email.includes(".com")) {
        return true;
    } else {
        alert("Please enter a valid email");
        return false;
    }

}

function validatePassword(password, cpassword) {
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
    if (password != cpassword) {
        alert("Password & Confirm Password is not matching");
        return false;
    } else {
        if (password.length < 8) {
            alert("Password can not be less than 8 characters");
            return false;
        }
        if (password.length > 21) {
            alert("Password can not be longer than 20 characters");
            return false;
        }
    }
    return true;
}


function regCheck() {

    var name = document.getElementById("name").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
    var gender = document.getElementById("Gender").value;
    var dob = document.getElementById("dob").value;
    var submit = document.getElementById("submit").value;



    if (name == "" || username == "" || email == "" || password == "" || cpassword == "" || gender == "" || dob == "") {
        alert("Please fill up the form properly.")
    } else {
        if (validateName(name)) {
            if (validateUsername(username)) {
                if (validateEmail(email)) {
                    if (validatePassword(password, cpassword)) {
                        var xhttp = new XMLHttpRequest();
                        xhttp.open('POST', '../../controller/admin/regCheck.php', true);
                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhttp.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200) {
                                if (this.responseText != "success") {

                                    alert("Registration Successful");
                                    window.location = "../admin/adminLogin.html";
                                    window.stop;
                                } else {


                                    alert("Registration Failed");
                                }
                            }
                        }
                        xhttp.send('submit=' + submit + '&name=' + name + '&username=' + username + '&email=' + email + '&password=' + password + '&gender=' + gender + '&dob=' + dob);
                    }
                }
            }
        }
    }
}


function editProfile() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var gender = document.getElementById("gender").value;
    var dob = document.getElementById("dob").value;
    var submit = document.getElementById("submit").value;
    if (name == "" || email == "" || gender == "" || dob == "") {
        alert("Please fill all the information.");
    } else {
        if (validateName(name)) {

            if (validateEmail(email)) {
                var xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../../controller/admin/edit.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText == "success") {

                            alert("Your profile is updated");

                        } else {
                            alert("Profile can not be updated");

                        }
                    }
                }
                xhttp.send('submit=' + submit + '&name=' + name + '&email=' + email + '&gender=' + gender + '&dob=' + dob);

            }

        }
    }

}

function userReg() {

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var gender = document.getElementById("gender").value;
    var dob = document.getElementById("dob").value;
    var submit = document.getElementById("submit").value;



    if (name == "" || email == "" || gender == "" || dob == "") {
        alert("Please fill up the form properly.")
    } else {
        if (validateName(name)) {
            if (validateEmail(email)) {
                var xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controller/admin/userReg.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText == "success") {
                            alert("User Added");
                            window.location = "../view/addUser.php";
                            window.stop;
                        } else {
                            alert("User registration failed");
                        }
                    }
                }
                xhttp.send('submit=' + submit + '&name=' + name + '&email=' + email + '&gender=' + gender + '&dob=' + dob);

            }

        }
    }
}

function merchantReg() {

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var gender = document.getElementById("gender").value;
    var dob = document.getElementById("dob").value;
    var submit = document.getElementById("submit").value;



    if (name == "" || email == "" || gender == "" || dob == "") {
        alert("Please fill up the form properly.")
    } else {
        if (validateName(name)) {
            if (validateEmail(email)) {
                var xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controller/admin/merchantReg.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText == "success") {
                            alert("Merchant Added");
                            window.location = "../view/addMerchant.php";
                            window.stop;
                        } else {
                            alert("Merchant registration failed");
                        }
                    }
                }
                xhttp.send('submit=' + submit + '&name=' + name + '&email=' + email + '&gender=' + gender + '&dob=' + dob);

            }

        }
    }
}