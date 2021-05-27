<?php 
    session_start(); 
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updates</title>
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
        <a class="link active" href="updates.php">Updates</a>

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
    <!--////////////////////////////Updates////////////////////////////////-->
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
</body>
</html>