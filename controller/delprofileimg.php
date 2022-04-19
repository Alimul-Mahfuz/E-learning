<?php
include '../model/db-connect.php';
if($conn->connect_errno){
    echo "faild to connect";
}else{
    session_start();
    
    $delimg = "update users set profileImage='".null."' where email='".$_SESSION['umail']."'";
    if($conn->query($delimg)){
        session_start();
        $_SESSION['profileimgpath']=null;
        header("location:../view/student/stdprofile.php");
    }
    else{
        // echo $_SESSION['umail'];
        echo "fiald to delete";
    }
}