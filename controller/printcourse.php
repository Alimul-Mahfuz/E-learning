<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-learningdb";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    echo "Faild to connect database";
    exit;
} else {
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
    $qc = "select c_id from payment where user_id='".$id."'";
    $courseArray = [];

    $res = $conn->query($qc);
    // print_r($res);
    if ($res->num_rows > 0) {
        while($rw = $res->fetch_assoc()){
            $qd = "select c_name from courses where c_id='" . $rw['c_id']. "'";
            $rs = $conn->query($qd);
            if ($rs->num_rows > 0){
                while($ro = $rs->fetch_assoc()){
                    array_push($courseArray,$ro['c_name']);
                }
            }
            else{
                "faild to retrive course name";
            }


        }
    } else {
        echo "failded";
    }
}
