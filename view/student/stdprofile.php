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
        <link rel="stylesheet" href="../css/std-profilestyle.css">
        <link rel="stylesheet" href="../css/navbar-style.css">
        <link rel="stylesheet" href="../css/std-dashboardstyle.css">
        <link rel="stylesheet" href="../css/footerstyle.css">
        <title>Profile</title>
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
        </style>
    </head>

    <body>
        <?php include 'student-nav.php'; ?>
        <!-- Main container -->
        <div class="flex-container">
            <div class="profile-datails">
                <table>
                    <tr>
                        <td>
                            <h2>Name</h2>
                        </td>
                        <td>
                            <h2>:</h2>
                        </td>
                        <td>
                            <h2><?php echo $_SESSION['uname']; ?></h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Email</h3>
                        </td>
                        <td>
                            <h3>:</h3>
                        </td>
                        <td>
                            <h3><?php echo $_SESSION['umail']; ?></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Phone</h4>
                        </td>
                        <td>
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4><?php echo $_SESSION['uphone']; ?></h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Address</h4>
                        </td>
                        <td>
                            <h4>:</h4>
                        </td>
                        <td>
                            <p><?php echo $_SESSION['uaddress']; ?></p>
                        </td>
                    </tr>
                </table>
                <div class="btn-container">
                    <button><a href="#">Change Password</a></button>
                    <button><a href="#">Edit Details</a></button>
                    <button><a href="#">View Grade</a></button>
                    <button style="background-color: red;"><a href="#">Delete Account</a></button>
                </div>
            </div>
            <div class="profile-image">
                <?php if (empty($_SESSION['profileimgpath'])) {
                    echo "You don't have a profile picture yet, want to upload?";
                    echo '<br>';
                ?><a href="./profileimageupload.php">Upload Picture</a><?php
                                                                    } else { ?>
                    <img style="height: 277px; width:auto;" src="<?php echo $_SESSION['profileimgpath']; ?>" alt="no image">
                    <br>
                    <a href="./profileimageupload.php">Change picture</a>
                <?php } ?>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php
} else {
    header('location: ../login.php');
}
