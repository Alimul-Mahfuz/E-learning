<?php
//This is the validaion and logged in the user. Used for login.php
//Connection string are added via separete class
require '../model/db-connect.php';
require 'charValidation.php';

$email = "";
$emailErr = "";
$passErr = "";
$umail = "";
$upass = "";
$isPost = false;
$errFlag = [];//Array to contain any kind of error event
$loginErr = "";
$accountypeErr= "";

/*input validation code*/
if (isset($_POST['btn-login'])) {
    $isPost = true;
    if (isset($_POST['email'])) {
        $email = validate_input($_POST['email']);
        $umail = $email;
    }
}

//Setting the error message for user
if (empty($_POST["email"]) && $isPost == true) {
    $emailErr = "Email is missing";
    array_push($errFlag, $emailErr);
}
if (empty($_POST["password"]) && $isPost == true) {
    $passErr = "** Password is missing";
    array_push($errFlag, $passwordErr);
}

/*Database query execution code*/
if (empty($errFlag) && $isPost == true) {
    $umail = $_POST['email'];
    $upass = $_POST['password'];
    if ($conn->connect_error) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    } else {
        $q = "select * from users where email='" . $umail . "' and password='" . $upass . "'";
        $result = $conn->query($q); //return the database result object which is stored in $result here
        //$result has a property num_rows which will return the number of rows return by the execution of the query
        if ($result->num_rows > 0) {
            //starting a new session for successfully logged in user
            session_start();
            /*The following loop will iterate over all the value that values are associate with the matched 
            data in an associative array format. */
            while ($row = $result->fetch_assoc()) {
                $_SESSION['uname'] = $row['name'];
                $_SESSION['umail'] = $row['email'];
                $_SESSION['uphone']=$row['phone'];
                $_SESSION['uid']=$row['user_id'];
                $_SESSION['urole']=$row['u_role'];
                $_SESSION['profileimgpath']=$row['profileImage'];

            }
            if($_SESSION['urole']==2){
                //This will redirected the user to student's dashboard
                header("location:../view/student/student-dashboard.php");
            }
            // else{
            //     $accountypeErr= "Select your appropieate account type";
            // }

        } else {
            // Setting the error values for mismatched email and password
            $loginErr = "** Email or password is incorrect";
        }
    }
}
