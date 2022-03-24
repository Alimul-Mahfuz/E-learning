<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar-style.css">
    <link rel="stylesheet" href="../css/student-dashboardStyle.css">
    <title>Welcome</title>
    <style>
        nav ul li button {
            padding: 10px;
            background-color: red;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <!--Navbar for student-->
    <?php include 'stdudent-nav.php'; ?>

    <h3>Welcome <?php echo $_SESSION['uname'];?></h3>





</body>

</html>