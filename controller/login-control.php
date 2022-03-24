<?php

//Connection string are added via separete class
require '../model/db-connect.php';
require 'charValidation.php';
$email = "";
$emailErr = "";
$passErr = "";
$umail = "";
$upass = "";
$isPost = false;
$errFlag = [];
$loginErr="";

if (isset($_POST['btn-login'])) {
    $isPost = true;
    if (isset($_POST['email'])) {
        $email = validate_input($_POST['email']);
        $umail = $email;
    }
}

if (empty($_POST["email"]) && $isPost == true) {
    $emailErr = "Email is missing";
    array_push($errFlag, $emailErr);
}
if (empty($_POST["password"]) && $isPost == true) {
    $passErr = "** Password is missing";
    array_push($errFlag, $passwordErr);
}

if (empty($errFlag) && $isPost == true) {
    $umail = $_POST['email'];
    $upass = $_POST['password'];
    if ($conn->connect_error) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    } else {
        $q = "select * from users where email='" . $umail . "' and password='" . $upass . "'";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
            session_start();
            while ($row = $result->fetch_assoc()) {
            $_SESSION['uname']=$row['name'];
            header("location:../view/student/student-dashboard.php");
            }
        } else {

            $loginErr="** Email or password is incorrect";
        }
    }
}
