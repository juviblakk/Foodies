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

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
        <title>Foodie - <?php echo $title ?></title>

    </head>

    <body>
        
    <!-- header section starts  -->

    <header>

        <a href="index.php" class="logo"><img src="images/bearded-chef.png" alt=""></a>

        <div id="menu-bar" class="fas fa-hamburger"></div>

        <nav class="navbar">
            <ul>
                <li><a class="active" href="index.php">home</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="menu.php">menu</a></li>
                <li><a href="chef.php">chef</a></li>
                <li><a href="gallery.php">gallery</a></li>
                <li><a href="order.php">order</a></li>
                <li>
                    <?php if(!isset($_SESSION['userid']))?>
                    <a href="login.php">login</a>
                </li>
            </ul>
            
        </nav>

</header>