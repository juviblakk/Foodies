<?php ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>

        
        <!-- aos css cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

        <!-- google fonts cdn link  -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
        <title>Foodie - <?php echo $title ?></title>

    </head>

    <body>
        
    <!-- header section starts  -->

    <header>

        <a href="index.php" class="logo"><img src="images/ServerLogo.png" alt=""></a>

        <div id="menu-bar" class="fas fa-hamburger"></div>

        <nav class="navbar">
            <ul>
                <li><a class="active" href="index.php">home</a></li>
                <li><a href="Topic.php">Topic</a></li>
                <li><a href="main.html">Course</a></li>
                <li><a href="Web-Server.php">Web Server</a></li>
                <li><a href="FTP-Server.php">FTP Server</a></li>
                <li><a href="Team.php">Team</a></li>
                <li><a href="gallery.php">gallery</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>
             </ul>

        </nav>

</header>