<?php
/* The file will print all the courses form course table with additional details*/
// External database connection file
include '../model/db-connect.php';
if ($conn->connect_errno) {
    echo "Faild to connect";
} else {
    // Retriving all the value form course table
    $qry = "select * from courses";
    $ret = $conn->query($qry);
    if ($ret->num_rows > 0) {
        while ($row = $ret->fetch_assoc()) {
            $cname = $row['c_name'];
            $duraton = $row['duration'];
            $cid = $row['c_id'];
            $price = $row['price'];
            $category = $row['category'];
            $cuid = $row['user_id'];
            $qy = "select name from users where user_id='" . $cuid . "'";
            $res = $conn->query($qy);
            if ($res->num_rows > 0) {
                while ($ro = $res->fetch_assoc()) {
                    $insname = $ro['name'];
                }
?>
<!-- The following portion of just used for showing the styling and the details of the course that just retrive -->
                <tr>
                    <td style="background: linear-gradient(92.11deg, #487EB0 30.92%, rgba(<?php echo rand(10, 255); ?>, <?php echo rand(180, 255); ?>, 95, 0.536913) 80.37%, rgba(<?php echo rand(177, 255); ?>, 111, <?php echo rand(50, 255); ?>, 0) 124.93%);"><?php echo $cname; ?> <br> <span style="font-size: 14pt;font-weight: 400;"><?php echo 'Offered By: ' . $insname; ?></span>
                        <br><span class="pcourse">Duration: <?php echo $duraton; ?></span>
                        <br>
                        <!-- <span class="pcourse">Price: <?php echo $price; ?> </span> -->
                        <br>
                        <span class="pcourse">Category: <?php echo $category; ?></span>
                        <!-- Forward the course information via url using enroll button -->
                        <button><a href="./student/enrolcourse.php?u_id=<?php echo $cuid;?>&c_id=<?php echo $cid; ?>&">Enroll</a></button>
                    </td>
                </tr>
<?php
            } else {
                echo "faild to read";
            }
        }
    } else {
        echo "faild to read database";
    }
}
