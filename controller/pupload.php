<?php
session_start();
include '../../model/db-connect.php';
if (empty($_SESSION['uid'])) {
    $q = "select user_id from users where email='" . $_SESSION['umail'] . "'";
    $result = $conn->query($q); //return the database result object which is stored in $result here
    //$result has a property num_rows which will return the number of rows return by the execution of the query
    if ($result->num_rows > 0) {
        /*The following loop will iterate over all the value that values are associate with the matched 
            data in an associative array format. */
        while ($row = $result->fetch_assoc()) {
            $_SESSION['uid'] = $row['user_id'];
        }
    }
}


$id = $_SESSION['uid'];
if (isset($_POST["btn-pup"])) {
    $typsafe = false;
    $allowedfileType = array('jpg', 'jpeg', 'png');
    $currentFileType = $_FILES['pimg']['type'];
    $currentFileExt = explode('.', $_FILES['pimg']['name']);
    for ($i = 0; $i < count($allowedfileType); $i++) {
        if ($currentFileExt[1] == $allowedfileType[$i]) {
            $typsafe = true;
            break;
        } else {
            $typsafe = false;
        }
    }
    if ($typsafe) {
        if ($_FILES['pimg']['error'] == 0) {
            if ($_FILES['pimg']['size'] < 10000000) {
                $newFileName = 'profileId' . $id . '.' . $currentFileExt[1];
                // if(file_exists($prev)){
                //     unlink($prev);
                // }
                $uploadDestination = '../../model/user-profile-images/' . $newFileName;
                move_uploaded_file($_FILES['pimg']['tmp_name'], $uploadDestination);
                $uploadimageQuery = "Update users set profileImage='" . $uploadDestination . "' where user_id='" . $id . "'";
                $res = $conn->query($uploadimageQuery);
                if ($res) {
                    $_SESSION['profileimgpath'] = $uploadDestination;
                    header('location: stdprofile.php');
                } else {
                    echo 'Faild to upload image';
                }
            } else {
                echo 'file size is too large to upload';
            }
        } else {
            echo 'file has an error';
        }
    } else {
        echo 'Please upload jpg,jpeg or png file';
    }
}
