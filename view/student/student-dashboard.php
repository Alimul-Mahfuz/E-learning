<?php
session_start();
if (isset($_SESSION)) {


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
                background-color: cadetblue;
                border: none;
                border-radius: 10px;
            }

            table {
                border-spacing: 0px 10px;
                margin: 0 auto;
                padding: 0px 120px;
                width: 100%;
                /* border: 2px solid black; */
            }

            table td {

                height: 100px;
                /* border: 2px solid red; */
                padding: 0px 20px;
                color: white;
                font-size: 18pt;
                font-weight: 600;
                /* background: linear-gradient(92.11deg, #487EB0 30.92%, rgba(<?php echo rand(10, 255); ?>, 40, 95, 0.536913) 80.37%, rgba(3, 111, 211, 0) 124.93%); */


            }

            table td button {
                float: right;
                padding: 10px;
                background-color: red;
                border: none;
                width: 150px;
                font-weight: 400px;
            }

            table td button a{
                text-decoration: none;
                color: white;
                font-size: 12pt;
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

        <table>
            <?php include '../../controller/printcourse.php'; ?>
        </table>



    </body>

    </html>
<?php } else {
    header('location: ../login.php');
}
?>