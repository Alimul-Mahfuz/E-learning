<?php
session_start();
if(isset($_SESSION)){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar-style.css">
    <link rel="stylesheet" href="../css/std-dashboardstyle.css">
    <title>Welcome to E-Learning</title>
    <!-- Internal css for modify the color of the logut button over loginstyle.css -->
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
    <?php include 'student-nav.php'; ?>

    <!-- Welcome banner -->
    <div class="stdbanner-container">
        <div class="inner-banner">
            <h2>Weclome, <?php echo $_SESSION['uname']; ?></h2>
            <h3>Learn to englighten your knowledge</h3>
        </div>
    </div>
    <!-- Enrolled Courses -->
    <h3 class="page-heading">Enrolled Course</h3>

</body>

</html>
<?php }
else{
    header('location: ../login.php');
}
?>