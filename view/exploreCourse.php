
<!-- This page will list down all the course available in the course table in the database -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar-style.css">
    <link rel="stylesheet" href="./css/footerstyle.css">
    <title>Explore Courses</title>
    <style>
        body{
            background-image: url("./images/bg2.png");
        }
        nav ul li button {
            padding: 10px;

            border: none;
            border-radius: 10px;
        }

        table {

            border-spacing: 0px 10px;
            margin: 0 auto;
            padding: 5px 120px;
            width: 100%;
            /* border: 2px solid black; */
        }

        table td {

            height: 100px;
            /* border: 2px solid red; */
            padding: 20px 20px;
            color: white;
            font-size: 18pt;
            font-weight: 600;
            /* background: linear-gradient(92.11deg, #487EB0 30.92%, rgba(<?php echo rand(10, 255); ?>, 40, 95, 0.536913) 80.37%, rgba(3, 111, 211, 0) 124.93%); */


        }

        table td button {
            float: right;
            padding: 10px;
            background-color: #248FB0;
            border: none;
            width: 150px;
            margin-bottom: 25px;
            font-weight: 400px;
        }

        table td button a {
            text-decoration: none;
            color: white;
            font-size: 12pt;
        }

        .pcourse {
            font-size: 12pt;
            color: white;
        }
    </style>
</head>

<body>
    <?php session_start();
    if(empty($_SESSION)){
        include './index-navbar.php';
    }
    else{
        ?>
        <div class="navbar">
    <h2>E-learning</h2>
    <nav>
        <ul>
            <li><a href="./student/student-dashboard.php">Home</a></li>
            <li><a href="#">Explore</a></li>
            <li><a href="#">View Course</a></li>
            <li><a href="./student/stdprofile.php">Profile</a></li>
            <li><button style="background-color: cadetblue;"><a href="../controller/logout.php">Logout</a></button></li>
        </ul>
    </nav>
</div><?php
    }
    
    ?>
    <table>
        <?php include '../controller/printAllCourse.php'; ?>
    </table>
    <?php include './footer.php' ;?>

</body>

</html>