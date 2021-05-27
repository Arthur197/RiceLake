<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" href="Pics/Icon.jpg">
    <link href="style.css" rel="stylesheet">

</head>
<body>
    <!--////////////////////////////Nav Bar////////////////////////////////-->
    <div class="topnav">
        <h1><a href="index.php">Arrowhead Camp & Resort</a></h1>
        <a class="link active" href="about.php">About</a>
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
    <!--////////////////////////////Main Content////////////////////////////////-->
    <div class="textContainer">

        <h2>The Campground</h2>
        <p>
            Arrowhead Camp & Resort is a lakeshore trailer camp, with 69 trailer sites located in a beautiful 7.5 acres park, right beside famous Rice Lake.

            It conveniently located at 5676 Arrowhead Rd., just about an hour away from Toronto along highway 401 east, and 20 minutes away in the south of Peterborough. 
            
            It is close to amenities such as golf courts, mountain sking, restaurants and stores. Arrowhead Camp & Resort is a fishing, boating and family fun resort and vacation getaway.
        </p>
        <img class="embedded" src="Pics/Campground.jpg">
        <br>
        <iframe class ="video"  src="https://www.youtube.com/embed/uDvpt5XQ7o8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>

        <h2>The Waterfront</h2>
        <p>
            Enjoy fishing, swimming, and boating at our lakeside waterfront.
        </p>
        <img class="embedded" src="Pics/Waterfront.jpg">

        <h2>Location and Contact Information</h2>
        <p>
            5676 Arrowhead Rd.<br>
            Bailieboro, ON<br>
            K0L 1B0<br>
            416-999-9131<br>
            arrowheadcampresort@gmail.com
            We can be also reached through our <a href=" https://www.facebook.com/arrowheadcampresort">facebook page</a>
        </p>
        <div class="centre">
            <div id='printoutPanel'></div>
        
            <div id='myMap' class='myMap'></div>
            <script type='text/javascript'>
                function loadMapScenario() {
                    <!--////////////////////////////Set Bar////////////////////////////////-->                
                    var navigationBarMode = Microsoft.Maps.NavigationBarMode;
                    var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
                        /* No need to set credentials if already passed in URL */
                        navigationBarMode: navigationBarMode.compact,
                        supportedMapTypes: [Microsoft.Maps.MapTypeId.road, Microsoft.Maps.MapTypeId.aerial, Microsoft.Maps.MapTypeId.grayscale, Microsoft.Maps.MapTypeId.canvasLight]
                    });
                
                    <!--////////////////////////////Set Map Location////////////////////////////////-->                
			    	map.setView({
                        mapTypeId: Microsoft.Maps.MapTypeId.aerial,
                        center: new Microsoft.Maps.Location(44.118735, -78.315404),
                        zoom: 12
                   });
			    	<!--////////////////////////////Set Pin////////////////////////////////-->
                    var pushpin = new Microsoft.Maps.Pushpin(map.getCenter(), { color: 'blue' });
                   map.entities.push(pushpin);
				
                }
            </script>
            <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AiyD66s4i0CODmyExJZhAdiRQlLpM7MbZ95ZlnF0yfwElvC_E7y-P7fKkMS0Oh8D&callback=loadMapScenario' async defer></script>
            
            <p>
                <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=44.118735~-78.315404&amp;sty=h&amp;lvl=11&amp;rtp=~adr.5676%Arrowhead%Rd,Bailieboro,ON____&amp;FORM=MBEDLD">Get Directions</a>
            </p>
        
        </div>

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