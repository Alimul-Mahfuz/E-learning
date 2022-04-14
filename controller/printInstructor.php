<?php

function printInstructorDetails($ins_id)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e-learningdb";

    $conn = new mysqli($servername, $username, $password, $dbname);


    $qry = "select name, email, profileImage from users where user_id='" . $ins_id . "'";
    if ($conn->connect_errno) {
        echo "faild to connect";
    } else {
        $result = $conn->query($qry);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $insName = $row['name'];
                $insEmail = $row['email'];
                $profileImage = $row['profileImage'];
                $eduQuery = "select * from ins_qual where u_id ='" . $ins_id . "'";
                if ($conn->connect_errno) {
                    echo "Faild to connect";
                } else {
                    $eduRes = $conn->query($eduQuery);
                    if ($eduRes->num_rows > 0) {
                        while ($edurow = $eduRes->fetch_assoc()) {
                            $uniName = $edurow['inst_name'];
                            $degree = $edurow['degree'];
                        }
                        $insDetails['instname'] = $uniName;
                        $insDetails['degree'] = $degree;
                    } else {
                        echo "No Data found!";
                    }
                }
            }
        } else {
            echo "No data found!!";
        }
    }
    $insDetails = array();
    $insDetails['name'] = $insName;
    $insDetails['email'] = $insEmail;
    $insDetails['profileImage'] = $profileImage;

    return $insDetails;
}
