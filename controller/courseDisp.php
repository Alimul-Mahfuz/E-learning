<?php
function PrintCourseName($c_id){
    include '../model/db-connect.php';
    if($conn->connect_errno){
        echo "faild to connect";
    }
    else{
        $desQuery = "select banner from courses where c_id='".$c_id."'";
        $desRes=$conn->query($desQuery);
        if($desRes->num_rows>0){
            while($desRow=$desRes->fetch_assoc()){
                $c_description = $dessRow['banner'];
            }
        }
        else{
            echo "Unable to read";
        }
    }
    return $c_description;

}