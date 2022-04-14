<?php
include '../../controller/printInstructor.php';


$insDet = printInstructorDetails($_GET['instructor_id']);
$cid = $_GET['course_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar-style.css">
    <link rel="stylesheet" href="../css/std-dashboardstyle.css">
    <link rel="stylesheet" href="../css/footerstyle.css">
    <title>Enroll Course</title>
    <style>
        body {
            background-image: url("../images/bg2.png");
        }

        nav ul li button {
            padding: 10px;
            background-color: cadetblue;
            border: none;
            border-radius: 10px;
        }

        .cdetails-container {
            background: linear-gradient(92.11deg, #487EB0 30.92%, rgba(<?php echo rand(10, 255); ?>, <?php echo rand(180, 255); ?>, 95, 0.536913) 80.37%, rgba(<?php echo rand(177, 255); ?>, 111, <?php echo rand(50, 255); ?>, 0) 124.93%);
            height: 350px;
            margin: 5px 100px;
        }

        .courseBannertext {
            font-size: 30pt;
            color: white;
            position: relative;
            top: 50px;
            left: 50px;
        }

        .insname {
            font-size: 14pt;
            padding: 5px 0px;

        }

        .insdetails {
            margin: 5px 100px;
            padding: 10px;
            background-color: #bfbfbf;

        }

        .insdetails a {
            text-decoration: none;
            color: black;
            padding: 50px;
        }


        #enroll {
            font-size: 14pt;
            background-color: #669999;
            border: none;
            padding: 10px 40px;
            border: 2px solid black;
            border-radius: 5px;
            float: right;
            margin: 50px 50px;
        }
    </style>
</head>

<body>
    <!--Navbar for student-->
    <?php include 'student-nav.php'; ?>

    <!-- Course info details -->
    <div class="cdetails-container">
        <div class="course-details">
            <p class="courseBannertext"><?php echo $_GET['c_name']; ?></p>
            <p class="courseBannertext insname">Offered By.. <?php echo $insDet['name']; ?></p>
            <p class="courseBannertext insname"><?php echo $_GET['duration']; ?></p>
            <p class="courseBannertext insname">Enroll for: <?php echo $_GET['price']; ?>$</p>
            <br>
            <br>
            <a href="../../controller/courseEnroll.php?cid=<?php echo $cid; ?>"><button id="enroll">Enroll</button></a>


        </div>
    </div>
    <div class="insdetails"><span><a href="#" onclick="showInstDetails">About Instructor</a></span><span><a href="">Course Despcription</a></span></div>
</body>

</html>