<?php

/*This file will validate singup.php and find any empty space in 
php form and generate error*/
include 'charValidation.php';
include '../model/db-connect.php';

//Error variables
$fnameErr = "";
$lnameErr = "";
$emailErr = "";
$phoneErr = "";
$addressErr = "";
$urollErr = "";
$retypePasswordErr = "";
$passmismatchErr = "";
$passwordErr = "";
$successReg = false;

//Form value setter
$fname = "";
$lname = "";
$email = "";
$phone = "";
$address = "";
$uroll = "";
$upass = "";
$isPost = false;

//Error flag
$errFlag = [];


//Setting value if everything is okay when press the register button

if (isset($_POST["btn-singup"])) {
    $isPost = true;
    if (isset($_POST['fname'])) {
        $fname = validate_input($_POST["fname"]);
    }
    if (isset($_POST["lname"])) {
        $lname = validate_input($_POST["lname"]);
    }
    if (isset($_POST["phone"])) {
        $phone = validate_input($_POST["phone"]);
    }
    if (isset($_POST['email'])) {
        $email = validate_input($_POST['email']);
    }
    if (isset($_POST['password'])) {
        $upass = $_POST['password'];
    }
    if (isset($_POST['urole'])) {
        $uroll = $_POST['urole'];
    }
}

/*Check if the field is empty or not else it push the error message
to the errFlag */

if (empty($_POST["fname"]) && $isPost == true) {
    $fnameErr = "* First name required";
    echo $fname;
    array_push($errFlag, $fnameErr);
}

if (empty($_POST["lname"]) && $isPost == true) {
    $lnameErr = "* Lasst name required";
    array_push($errFlag, $lnameErr);
}

if (empty($_POST["phone"]) && $isPost == true) {
    $phoneErr = "Phone number is missing";
    array_push($errFlag, $phoneErr);
}

if (empty($_POST["email"]) && $isPost == true) {
    $emailErr = "Email is missing";
    array_push($errFlag, $emailErr);
}

if (empty($_POST["password"]) && $isPost == true) {
    $passwordErr = "** Password is missing";
    array_push($errFlag, $passwordErr);
}
if (empty($_POST["re-password"]) && $isPost == true) {
    $retypePasswordErr = "** Re-type your password";
    array_push($errFlag, $retypePasswordErr);
}

if (!empty($_POST["re-password"]) && $isPost == true) {
    if (strcmp($upass, $_POST['re-password']) != 0) {
        $passmismatchErr = "Passwrod didn't match";
        array_push($errFlag, $passmismatchErr);
    } else {
        $upass = $_POST['re-password'];
    }
}

if (empty($_POST['urole']) && $isPost == true) {
    $urollErr = "please select your account type";
    array_push($errFlag, $urollErr);
}

if ($isPost == true && empty($errFlag)) {
    if ($conn->connect_error) {
        echo 'Faild to connect' . $conn->connect_error;
        exit();
    } else {
        $q = "select * from users where email='" . $email ."'";
        $result = $conn->query($q); //return the database result object which is stored in $result here
        //$result has a property num_rows which will return the number of rows return by the execution of the query
        if ($result->num_rows > 0) {
            //Check if the email is alrady exist in the database
            $emailErr= 'Email already exist!';
        } else {
            $uname = $fname . ' ' . $lname;
            $insq = "INSERT INTO users (name,email,password,u_role,phone) VALUES ('" . $uname . "','" . $email . "','" . $upass . "','" . $uroll . "','" . $phone . "')";
            $result = $conn->query($insq);
            if ($result) {
                header("location: ../view/student/student-dashboard.php");
            } else
                echo "Unknown error occured, Please try again later";
        }
    }
}
