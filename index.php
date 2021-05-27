<?php session_start();?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="bxCFzC6dij5qmHhczkaEsgdXlPXFP4shEuprxx7zQvw" />
    <title>Arrowhead Camp</title>
    <link rel="icon" href="Pics/Icon.jpg">
    <link href="style.css" rel="stylesheet">

</head>
<body>
    <!--////////////////////////////Nav Bar////////////////////////////////-->
    <div class="topnav">
        <h1><a href="index.php">Arrowhead Camp & Resort</a></h1>
        <a class="link" href="about.php">About</a>
        <a class="link" href="rentals.php">Rentals</a>
        <a class="link" href="sites.php">Vacant Sites</a>
        <a class="link" href="updates.php">Updates</a>

        <?php
	        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            ?>
                <a class="link" href="logout.php" style="float:right;">Logout</a>
                <a class="link" href="home.php" style="float:right;">Home</a>
            <?php } else { ?>
                <a class="link" href="login.php" style="float:right;">User Login</a>
            <?php
            }
        ?>


    </div>
    <!--////////////////////////Slideshow//////////////////////////////////////-->
    <div id="content">

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <!--<div class="numbertext">1 / 3</div>-->
                <img class="Slides" src="Pics/Slideshow/1.jpg">
                <!--<div class="text">The Lakefront</div>-->
            </div>

            <div class="mySlides fade">
                <!--<div class="numbertext">2 / 3</div>-->
                <img class="Slides" src="Pics/Slideshow/2.jpg">
                <!--<div class="text">Caption Two</div>-->
            </div>

            <div class="mySlides fade">
                <!--<div class="numbertext">3 / 3</div>-->
                <img class="Slides" src="Pics/Slideshow/3.jpg">
                <!--<div class="text">Caption Three</div>-->
            </div>

            <div class="mySlides fade">
                <!--<div class="numbertext">3 / 3</div>-->
                <img class="Slides" src="Pics/Slideshow/4.jpg">
                <!--<div class="text">Caption Three</div>-->
            </div>

            <div class="mySlides fade">
                <!--<div class="numbertext">3 / 3</div>-->
                <img class="Slides" src="Pics/Slideshow/5.jpg">
                <!--<div class="text">Caption Three</div>-->
            </div>

            <div class="mySlides fade">
                <!--<div class="numbertext">3 / 3</div>-->
                <img class="Slides" src="Pics/Slideshow/6.jpg">
                <!--<div class="text">Caption Three</div>-->
            </div>

            <div class="mySlides fade">
                <!--<div class="numbertext">3 / 3</div>-->
                <img class="Slides" src="Pics/Slideshow/7.jpg">
                <!--<div class="text">Caption Three</div>-->
            </div>

            <div class="mySlides fade">
                <!--<div class="numbertext">3 / 3</div>-->
                <img class="Slides" src="Pics/Slideshow/8.jpg">
                <!--<div class="text">Caption Three</div>-->
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles, needed for slideshow to rotate -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
        </div>
    </div>

    <!--////////////////////////////Latest News////////////////////////////////-->
    <div class="textContainer">
        <h2>Latest News</h2>
        <p>
            <b>2020-06-19</b><br>
            Website Open!
        </p>
        <img class="embedded" src="Pics/Updates/1.jpg">
    </div>
    <!--////////////////////////////Footer////////////////////////////////-->
    <div class="footer">
        <p class="footerHeader">Arrowhead Camp & Resort</p>
        <p class="footerText">
            5676 Arrowhead Rd.<br>
            Bailieboro, ON<br>
            K0L 1B0<br>
            705-980-1136<br>
            416-999-9131<br>
            arrowheadcampresort@gmail.com
        </p>
    </div>

    <script src="main.js"></script>
</body>
</html>