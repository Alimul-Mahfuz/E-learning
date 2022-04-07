<!DOCTYPE html>
<html lang="en">
<!-- The main index page -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/footerstyle.css">
    <link rel="stylesheet" href="./css/navbar-style.css">
    <!-- Google fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,200;1,300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <title>E-Learning | Best learning website</title>
</head>

<body>
    <!-- Global navbar -->
    <?php include 'index-navbar.php'; ?>
    <!-- Hero section with banner -->
    <div class="banner">
        <div class="textfield">
            <h3>
                <!-- Banner text -->
                <p>
                    Improve your skill with<br> us, enlighten you<br> knowledge
                </p>
            </h3>
            <!-- Course search field -->
            <form class="index-search" action="#" method="get">
                <input type="text" name="home-search" placeholder="Explore Courses">
            </form>
        </div>
    </div>
    <div class="unilogo">
        <h2>We collaborate with 200+ leading universities and companies</h2>
    </div>
    <div class="trendings">

    </div>
    <!-- External footer global -->
    <?php include 'footer.php'; ?>
</body>

</html>