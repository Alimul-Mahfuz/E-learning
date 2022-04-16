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
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login To E-Learning</title>
</head>
<style>
    .errorstyle {
        font-size: 10pt;
        color: red;
    }

    .logerr {
        display: none;
        color: red;
        font-size: 0.8rem;
        padding: 0.5rem 0.3rem;
    }
    #remember{
        height: 15px;
        width: 15px;
        font-size: 18pt;
        
    }

</style>

<body>
    <?php include 'index-navbar.php'; ?>
    <div class="login-container">
        <div class="login-form">
            <h3>Login To E-learning</h3>
            <div class="form-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return loginValidate();">
                    <input type="email" value="<?php if(isset($_COOKIE['email'])){
                        echo $_COOKIE['email'];
                        }?>" name="email" placeholder="Enter your mail" id="email">
                    <span><small id="emailErr" class="logerr"><i class="fa-solid fa-circle-exclamation"></i> Enter a valid email</small></span>

                    <input type="password" value="<?php if(isset($_COOKIE['pass'])){
                        echo $_COOKIE['pass'];
                        }?>" name="password" placeholder="Password" id="password">

                    <span><small id="passErr" class="logerr"><i class="fa-solid fa-circle-exclamation"></i> Enter a valid password</small></span>
                    <br>

                    <button type="submit" name="btn-login">Login</button>
                    <br>
                    <span><small id="logPassErr" class="logerr"><i class="fa-solid fa-circle-exclamation"></i><?php echo $loginErr; ?></small></span>
                    <!-- <span class="errorstyle"><?php echo $loginErr; ?></span>
                    <span class="errorstyle"><?php echo $accountypeErr; ?></span> -->
                    <span><input type="checkbox" name="rememberme" id="remember"> Remember Me</span>
                    <p><a style="color:red;" href="#">Forget password?</a></p>
                    <p>Don't join yet? <a style="color:blue;" href="singup.php">Sing up</a></p>
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
        var logEmailErr = "<?php echo $loginErr; ?>";
        console.log(logEmailErr);
        if (logEmailErr !== '') {
            let err = document.getElementById("logPassErr");
            err.style.display = 'block';
            alart();
            // logErrFlag=true;
        }
        if (logEmailErr == '') {
            let err = document.getElementById("logPassErr");
            err.style.display = 'none';
        }
    </script>
    <script src="./scripts/loginvalid.js"></script>
</body>

</html>