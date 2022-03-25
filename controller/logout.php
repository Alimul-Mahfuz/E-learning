<?php
/*The following code will check if session is active or not. if active it will unset the session.
And eventually logged out the user. This code is used in student-nav.php in view/student folder in navigaiton
bar codes.*/
    session_start();
    session_unset();
    session_destroy();
    header("location: ../view/index.php");