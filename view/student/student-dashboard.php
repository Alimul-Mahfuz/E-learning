<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar-style.css">
    <link rel="stylesheet" href="../css/student-dashboardStyle.css">
    <title>Welcome</title>
    <!-- Internal css for modify the color of the logut button over loginstyle.css -->
    <style>
        nav ul li button {
            padding: 10px;
            background-color: red;
            border: none;
            border-radius: 10px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .stdbanner-container {
            margin: 0 auto;
            background-image: url(../images/std-dashbaord-banner.png);
            background-size: cover;
            background-repeat: no-repeat;
            width: 1299px;
            height: 188px;
            text-align: center;
        }

        .inner-banner {
            position: relative;
            top: 50px;
            padding: 20px;
            margin: 0 auto;
            width: 558px;
            border: 2px solid black;
            line-height: 30px;
        }
        .page-heading{
            margin-left: 124px;
            padding:20px 0px;
        }
    </style>
</head>

<body>
    <!--Navbar for student-->
    <?php include 'stdudent-nav.php'; ?>

    <!-- Welcome banner -->
    <div class="stdbanner-container">
        <div class="inner-banner">
            <h2>Weclome, <?php echo $_SESSION['uname'];?></h2>
            <h3>Learn to englighten your knowledge</h3>
        </div>
    </div>
    <!-- Enrolled Courses -->
    <h3 class="page-heading">Enrolled Course</h3>




</body>

</html>