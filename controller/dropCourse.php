<?php 
include '../model/db-connect.php';
$cid = $_GET['c_id'];

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
    echo $id;
    $dropcs = "Delete from payment where user_id='".$id."' and c_id='".$cid."'";
    if($conn->query($dropcs)){
        header("location:../view/student/student-dashboard.php");
    }
    else{
       echo "faild to delete";
    }
}


