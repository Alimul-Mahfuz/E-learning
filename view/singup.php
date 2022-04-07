<?php


/*This form is submitted to self and validated from reg-control.php*/
require '../controller/reg-control.php';
// reg-control.php will validate the input on server-side. Handel error and 
// upload data to user table in database


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- External css links -->
    <link rel="stylesheet" href="./css/registrationstyle.css" />
    <!-- registrationstyle.css is contain the main registration form styling -->
    <link rel="stylesheet" href="./css/navbar-style.css">
    <link rel="stylesheet" href="./css/footerstyle.css">
    <!-- Font aowesome external css link. CDN link will not work without internet connection -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register To E-Learning</title>
</head>

<style>
    /* Error styling for */
    .errorstyle {
        padding: 3px 0px;
    }

    .regform-container {
        display: block;
    }
</style>

<body>
    <!-- Global Navber -->
    <?php include 'index-navbar.php'; ?>
    <!-- End of the Navbar -->

    <!-- Registration main area -->
    <div class="registration-container">
        <div class="reg-form">
            <h3>Thanks for joining with us</h3>
            <!-- Staring seciton of registration form area -->
            <div class="regform-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="reg-form" method="post" onsubmit=" return validate();">
                    <!-- Table container which will contain input filed and submit button -->
                    <table>
                        <tr>
                            <td>
                                <!-- Used to input the first name from user -->
                                <input type="text" name="fname" id="fname" value="" placeholder="First Name" id="fname" />


                            </td>
                            <td>
                                <!-- Used to input the last name form user -->
                                <input type="text" id="lname" name="lname" value="" placeholder="Last Name" id="lname" />


                            </td>

                        </tr>
                        <tr>
                            <!-- The following two line of code will used to display error icon and message -->
                            <td><small id="fnameErr" style="display: none;"><i class="fa-solid fa-circle-exclamation"></i> Invalid First Name</small></td>
                            <td><small id="lnameErr" style="display: none;"><i class="fa-solid fa-circle-exclamation"></i> Last Name Error</small></td>
                            <!-- <td> <span class="errorstyle"><?php echo $fnameErr; ?></span></td>
                            <td> <span class="errorstyle"><?php echo $lnameErr; ?></span></td> -->
                        </tr>
                        <tr>
                            <td colspan="2">
                                <!-- Eamil input field -->
                                <input style="width: 100%" type="email" id="email" value="<?php echo $email; ?>" name="email" placeholder="Email" />
                                <br>
                                <!-- <span class="errorstyle"><?php echo $emailErr; ?> -->
                                <!-- Used to display email error  -->
                            </td>
                        </tr>
                        <tr>
                            <td><small class="errorstyle" id="emailErr" style="display: none;"><i class="fa-solid fa-circle-exclamation"></i> Email Error</small></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <!-- Phone number input field -->
                                <input style="width: 100%" type="text" id="phone" value="<?php echo $phone; ?>" name="phone" placeholder="Phone" />
                                <br>
                                <!-- Used to display phone error -->
                                <!-- <span class="errorstyle"><?php echo $phoneErr; ?> -->
                                <span><small class="errorstyle" id="phoneErr" style="display: none;"><i class="fa-solid fa-circle-exclamation"></i> Invalid Phone number</small></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <!-- Password input field -->
                                <input style="width: 100%" type="password" id="password" name="password" placeholder="Password" />

                                <br>
                                <span><small class="errorstyle" id="passErr" style="display: none;"><i class="fa-solid fa-circle-exclamation"></i> Password cannot be empty!</small></span>

                                <!-- <span class="errorstyle"><?php echo $passwordErr; ?> -->
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <!-- Re type password input field -->
                                <input style="width: 100%" type="password" id="rePass" name="re-password" placeholder="Re-type Password" />
                                <br>
                                <!-- Retype password error print -->
                                <!-- <span class="errorstyle" id="repassErr"><small style="display: none;"><i class="fa-solid fa-circle-exclamation"></i> Re-type the password</small></span> -->
                                <!-- <span class="errorstyle"><?php echo $retypePasswordErr; ?>
                                <span class="errorstyle"><?php echo $passmismatchErr; ?> -->
                            </td>
                        </tr>
                        <tr>
                            <td><small id="repassErr" style="display: none;"><i class="fa-solid fa-circle-exclamation"></i> Re-type the password</small></td>
                        </tr>
                        <tr>
                            <!-- Role selection combobox, 1 for Teacher and 2 for Student -->
                            <td colspan="2">
                                <select style="width: 100%;" name="urole" id="urole">
                                    <option value="" disabled selected>I am a ...</option>
                                    <option value="1">Teacher</option>
                                    <option value="2">Student</option>
                                </select>
                                <br>
                                <!-- <span class="errorstyle"><?php echo $urollErr; ?> -->
                            </td>
                        </tr>
                        <tr>
                            <td><small id="roleErr" style="display: none;"><i class="fa-solid fa-circle-exclamation"></i>Please select your account type</small></td>
                        </tr>
                        <tr>
                            <!-- singup button -->
                            <td colspan="2" id="btn-comb"><button id="singupbtn" name="btn-singup" type="submit">Sing Up</button>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <p>Already have a account? <a href="./login.php">Login</a></p>
                            </td>
                        </tr>
                    </table>
                    <!-- End of table container -->

                </form>
                <!-- End of the form -->
            </div>
        </div>
    </div>
    <!-- End of the main area -->



    <!-- footer section -->
    <?php include 'footer.php'; ?>
    <!-- link of external javascript validation file -->
    <script src="./scripts/regvalid.js"></script>


</body>

</html>