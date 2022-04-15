<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-learningdb";

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);
$csa = array();

if ($conn->connect_errno) {
    echo 'Connect error';
} else {
    session_start();
    $mail = $_SESSION['umail'];
    $loggeduserid = "select user_id from users where email='" . $mail . "'";
    $res = $conn->query($loggeduserid);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $id = $row['user_id'];
        }
    }
    $check= "Select pay_id from payment where user_id='".$id."' and c_id='".$_GET['cid']."'";
    $chkres = $conn->query($check);
    if($chkres->num_rows>0){

        echo "You are already enrooled this course";
        header( "refresh:2;url=../view/student/student-dashboard.php" );
    }
    else{
        $dnow = date('y-m-d');
        $enrolqry = "INSERT INTO payment (user_id,c_id,date) VALUES ('" . $id . "','" . $_GET['cid'] . "','" . $dnow . "')";
        if ($conn->query($enrolqry)) {
            header("location:../view/student/student-dashboard.php");
        } else {
            echo "faild to insert";
        }
    }

}
