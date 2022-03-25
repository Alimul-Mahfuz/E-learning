<?php
/*This is form is submitted to self and validated form login-control.php in controller folder*/

include '../controller/login-control.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/loginstyle.css">
    <link rel="stylesheet" href="./css/navbar-style.css">
    <link rel="stylesheet" href="./css/footerstyle.css">
    <title>Login To E-Learning</title>
</head>
<style>
    .errorstyle {
        font-size: 10pt;
        color: red;
    }
</style>

<body>
    <?php include 'index-navbar.php'; ?>
    <div class="login-container">
        <div class="login-form">
            <h3>Login To E-learning</h3>
            <div class="form-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="email" value="<?php echo $email; ?>" name="email" placeholder="Enter your mail" id="">
                    <br>
                    <span class="errorstyle"><?php echo $emailErr; ?></span>
                    <input type="password" name="password" placeholder="Password" id="">
                    <br>
                    <span class="errorstyle"><?php echo $passErr; ?></span>
                    <button type="submit" name="btn-login">Login</button>
                    <br>
                    <span class="errorstyle"><?php echo $loginErr; ?></span>
                    <p><a href="#">Forget password?</a></p>
                    <p>Don't join yet? <a href="singup.php">Sing up</a></p>
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>