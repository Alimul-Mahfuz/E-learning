<?php
session_start();
if (empty($_SESSION)) {
    header('location: ../login.php');
}
include '../../controller/pupload.php';
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
            .form-container{
                width: 900px;
                min-height: 380px;
                margin: 60px auto;
                align-items: center;
                /* border: 2px solid blue; */
            }
            .form-container h2{
                text-align: center;
                margin-bottom: 50px;
            }
            .form-container form{
                
                margin: 0 auto;
                /* border: 2px solid black; */
                display: flex;
                align-items: center;
                min-height: 300px;
                flex-direction: column;
            }
            input{
                border: 2px solid #4d4dff;
                font-size: 14pt;
                border-radius: 5px;
                width: 100%;
               
            }
            #uploadbtn{
                padding: 10px 25px;
                font-size: 14pt;
                font-weight: 400;
                background-color:  #9999ff;
                color: white;
                border: none;
                border-radius: 5px;
            }
            #imgerr{
                font-size: 12pt;
                color: red;
                padding: 25px;
            }

        </style>
    </head>

    <body>
        <?php include 'student-nav.php'; ?>
        <!-- Main container -->
        <div class="form-container">
            <h2>Upload your Porfile Picture</h2>
        <form action="#" method="post"  enctype="multipart/form-data">
        <label for="pupload"></label>
        <input type="file" id="imgup" name="pimg">
        <br>
        <small id="imgerr" style="display: block;"><?php echo $imgupErr;?></small>
        <br>
        <br>
        <button type="submit" id="uploadbtn" name="btn-pup">Upload</button>

    </form>

        </div>     
        <?php include 'footer.php'; ?>
        <script>
            function imgCheck(){
                var img = document.getElementById('imgup');
                if(img.value===''){
                    document.getElementById('imgerr').style.display='block';
                    return false;
                }
                else{
                    document.getElementById('imgerr').style.display='none';
                    return true;
                }
            }
        </script>
    </body>

    </html>
