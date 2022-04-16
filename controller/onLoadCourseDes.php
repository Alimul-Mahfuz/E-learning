<?php
$c_id = $_POST['csid'];
include '../model/db-connect.php';
if ($conn->connect_errno) {
    echo "faild to connect";
} else {
    $desQuery = "select description from courses where c_id='" . $c_id . "'";
    $desRes = $conn->query($desQuery);
    if ($desRes->num_rows > 0) {
        while ($desRow = $desRes->fetch_assoc()) {
            $c_description = $desRow['description'];
        }
    } else {
        echo "Unable to read";
    }
}
?>
        <div class="courseDes">
            <h3>Course Descripiton:</h3>
           <p><?php echo $c_description;?></p>
        </div>

