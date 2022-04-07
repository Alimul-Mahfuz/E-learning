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
    </style>
</head>

<body>
    <!--Navbar for student-->
    <?php include 'student-nav.php'; ?>

    <!-- Course info details -->
    <div class="course-container">
        <div class="course-details">
            
        </div>
    </div>
</body>

</html>