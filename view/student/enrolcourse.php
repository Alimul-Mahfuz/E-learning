<?php
session_start();
if (empty($_SESSION)) {
    header('location: ../login.php');
}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

        .insdetails span button {
            text-decoration: none;
            font-size: 12pt;
            color: black;
            padding: 5px;
            border: none;
            /* border: 2.5px solid blueviolet; */
            background-color: #bfbfbf;

        }

        .insdetails span button:hover {
            font-weight: bold;
        }

        .insdetails span {
            margin-left: 10px;
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

        .insdet {
            display: flex;
            justify-content: space-between;
            margin: 12px 100px;
            min-height: 380px;
        }

        .insqual p {
            font-size: 14pt;
            font-weight: 400;
            padding: 10px 0px;
            line-height: 1.8rem;
        }
        .courseDes{
            margin: 12px 100px;
            text-align: justify;
            min-height: 380px;
            
        }
        .courseDes p{
            font-size: 14pt;
            line-height: 1.5rem;
        }
        .courseDes h3{
            font-size: 18pt;
            line-height: 3.5rem;
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
    <div class="insdetails"><span><button id="insdet">About Instructor</button></span><span><button id="csdet">Course Despcription</button></span></div>

    <div class="details-container">
        <?php include 'instprofile.php';?>

    </div>




    </div>
    <?php include 'footer.php';?>
</body>
<script>
    var insid = "<?php echo $_GET['instructor_id']?>"
    var cid ="<?php echo $cid;?>"
    $(document).ready(function() {
        $("#insdet").click(function() {
            $(".details-container").load("../../controller/onLoadProfilePrint.php",{
                uid:insid
            });
        });
        $("#csdet").click(function() {
            $(".details-container").load("../../controller/onLoadCourseDes.php",{
                csid:cid
            });
        });

    });
</script>

</html>