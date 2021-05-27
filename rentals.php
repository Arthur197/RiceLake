<?php 
    session_start(); 
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentals</title>
    <link rel="icon" href="Pics/Icon.jpg">
    <link href="style.css" rel="stylesheet">

</head>
<body>
    <!--////////////////////////////Nav Bar////////////////////////////////-->
    <div class="topnav">
        <h1><a href="index.php">Arrowhead Camp & Resort</a></h1>
        <a class="link" href="about.php">About</a>
        <a class="link active" href="rentals.php">Rentals</a>
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
    <!--////////////////////////////Content////////////////////////////////-->
    <div class="textContainer">
        <h2>Cottage on Rice Lake</h2>
        <p>
            Lakefront cottage directly on the lake, SPECTACULAR LAKE VIEW AND MAGNIFICENT SUNSET!!! On the west end of Rice Lake close to the GTA. The cottage has 1 queen bed, 1 pull-out sofa, a full kitchen, a 3 piece bathroom and a living room. 
            Good for 2 adults + 2 children. Deck and barbecue available outside of cottage. Minimum 2 nights. Monthly rental is welcome. No Pets. Bring your own bedding and towels.<br>
            Please make reservations through our <a href="https://www.airbnb.ca/rooms/36806737?preview_for_ml=true&source_impression_id=p3_1594069288_vV3gHY%2BNMGKZnNPP&guests=1&adults=1">airbnb page</a>
        </p>
        <!--////////////////////////Slideshow//////////////////////////////////////-->
        <div id="content">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <!--<div class="numbertext">1 / 3</div>-->
                    <img class="Slides" src="Pics/SlideshowMobileHome/1.jpg">
                    <!--<div class="text">The Lakefront</div>-->
                </div>

                <div class="mySlides fade">
                    <!--<div class="numbertext">2 / 3</div>-->
                    <img class="Slides" src="Pics/SlideshowMobileHome/2.jpg">
                    <!--<div class="text">Caption Two</div>-->
                </div>

                <div class="mySlides fade">
                    <!--<div class="numbertext">3 / 3</div>-->
                    <img class="Slides" src="Pics/SlideshowMobileHome/3.jpg">
                    <!--<div class="text">Caption Three</div>-->
                </div>

                <div class="mySlides fade">
                    <!--<div class="numbertext">3 / 3</div>-->
                    <img class="Slides" src="Pics/SlideshowMobileHome/4.jpg">
                    <!--<div class="text">Caption Three</div>-->
                </div>
            
                <div class="mySlides fade">
                    <!--<div class="numbertext">3 / 3</div>-->
                    <img class="Slides" src="Pics/SlideshowMobileHome/5.jpg">
                    <!--<div class="text">Caption Three</div>-->
                </div>
            
                <div class="mySlides fade">
                    <!--<div class="numbertext">3 / 3</div>-->
                    <img class="Slides" src="Pics/SlideshowMobileHome/6.jpg">
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
            </div>
        </div>

        <h2>Small Cabin with Great View on Rice Lake</h2>
        <p>
           Small cabin on Rice Lake, 100 feet away from the lake, with a great view from the deck. 
           Newly renovated, there is a queen size bed in the bedroom and a bunk on the top that can fit one person.
           There is a sofa bed in the living room as well as a kitchenette with a small sized fridge, a microwave, and a hot plate. 
           Please bring your own bedding and towels.
           This cabin is in my RV park, it shares the waterfront with other tenants. There are good fishing spots nearby<br>
           Please make reservations through our <a href="https://www.airbnb.ca/rooms/44427190?c=.pi80.pkcmVzZXJ2YXRpb24vaW5xdWlyaWVzL3JlbWluZGVy&euid=590738df-b0c1-d5df-a9a8-e95f9908bcc9&source_impression_id=p3_1597616106_TYnT7gObYKkR93qp&guests=1&adults=1">airbnb page</a>
        </p>
        <img class="embedded" src="Pics/Cabin/cabin1.jpg">

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