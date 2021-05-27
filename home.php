<?php 
    session_start(); 
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <a class="link" href="logout.php" style="float:right;">Logout</a>
        <a class="link active" href="home.php" style="float:right;">Home</a>
    </div>
    <!--////////////////////////////Login////////////////////////////////-->
    
    <?php

        $servername = "localhost";
        $username = "arthur_admin";
        $password = "Mac@0317";
        $dbname = "arthur_ricelake";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT SiteNumber, Name, BalanceDue, Messages FROM web_clients WHERE SiteNumber ='".$_SESSION["SiteNumber"]."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        echo "<div style='overflow-x:auto;'><table><tr><th>Site Number</th><th>Name</th><th>Balance Due</th><th>Messages</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
           echo "<tr><td>".$row["SiteNumber"]."</td><td>".$row["Name"]."</td><td>".$row["BalanceDue"]."</td><td>".$row["Messages"]."</td><</tr>";
         }
        echo "</table></div>";
        } else {
          echo " 0 results";
        }
        $conn->close();
    ?>
    
    <br>
    <a href="Park Rules 2020.pdf">Park Rules 2020 - PDF</a><br>
    <a href="reset-password.php">Reset Password</a>


    <!--////////////////////////////Footer////////////////////////////////-->
    <div class="footerSmallPage">
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