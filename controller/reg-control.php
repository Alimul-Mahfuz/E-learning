<?php

/*This file will validate singup.php and find any empty space in 
php form and generate error*/
include 'charValidation.php';

//Error variables
$fnameErr="";
$lnameErr="";
$emailErr="";
$phoneErr="";
$addressErr="";
$urollErr="";
$retypePasswordErr="";
$passmismatchErr="";
$passwordErr="";
$successReg=false;

//Form value setter
$fname="";
$lname="";
$email="";
$phone="";
$address="";
$uroll="";
$upass="";
$isPost=false;

//Error flag
$errFlag=[];


//Setting value if everything is okay when press the register button

if(isset($_POST["btn-singup"])){
    $isPost=true;
    if(isset($_POST['fname'])){
        $fname=validate_input($_POST["fname"]);
    }
    if(isset($_POST["lname"])){
        $lname=validate_input($_POST["lname"]);
    }
    if(isset($_POST["phone"])){
        $phone=validate_input($_POST["lname"]);
    }
    if(isset($_POST['email'])){
        $email=validate_input($_POST['email']);
    }
    if(isset($_POST['password'])){
        $upass=$_POST['password'];
    }
    if(isset($_POST['urole'])){
        $uroll=$_POST['urole'];
    }

 
}

/*Check if the field is empty or not else it push the error message
to the errFlag */

if(empty($_POST["fname"])&&$isPost==true){
    $fnameErr="* First name required";
    echo $fname;
    array_push($errFlag,$fnameErr);
}

if(empty($_POST["lname"])&&$isPost==true){
    $lnameErr="* Lasst name required";
    array_push($errFlag,$lnameErr);
}

if(empty($_POST["phone"])&&$isPost==true){
    $phoneErr="Phone number is missing";
    array_push($errFlag,$phoneErr);
}

if(empty($_POST["email"])&&$isPost==true){
    $emailErr="Email is missing";
    array_push($errFlag,$emailErr);
}

if(empty($_POST["password"])&&$isPost==true){
    $passwordErr="** Password is missing";
    array_push($errFlag,$passwordErr);
}
if (empty($_POST["re-password"]) && $isPost == true) {
    $retypePasswordErr = "** Re-type your password";
    array_push($errFlag, $retypePasswordErr);
}

if(!empty($_POST["re-password"])&& $isPost==true){
    if(strcmp($upass,$_POST['re-password'])!=0){
        $passmismatchErr="Passwrod didn't match";
        array_push($errFlag,$passmismatchErr);
    }
}

if (empty($_POST['urole']) && $isPost == true) {
    $urollErr = "please select your account type";
    array_push($errFlag, $urollErr);
}

/*This funciton will remove any special charecter and any unnecessary space and slash 
form input data to enter database*/
