<?php
session_start();
if (empty($_SESSION)) {
    header('location: ../login.php');
}
include '../../controller/pupload.php';
?>
<!-- The following code provide interface for uploading profile image that is uploaded via pupload.php 
in controller folder
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
    <label for="pupload"></label>
    <input type="file" name="pimg">
    <button type="submit" name="btn-pup">Upload</button>

    </form>
</body>
</html>