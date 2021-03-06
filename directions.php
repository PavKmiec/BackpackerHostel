<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backpacker Hostel | Find Us</title>
    <link rel="stylesheet" href="../hostel3/css/style.css">
</head>
<body>
<!-- Header area: branding; nav; image; h1; p;  -->
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Backpacker</span> Hostel</h1>
            </div>
            <nav>
                <ul>
                    <li> <a href="index.html">Home</a></li>
                    <li> <a href="facilities.php">Facilities</a></li>
                    <li> <a href="cafe.php">Cafe</a></li>
                    <li class="current"> <a href="directions.php">Getting Here</a></li>
                    <li> <a href="contact.php">Contact</a></li>
                    <li> <a href="survey.php">Survey</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- hero and newsletter -->
    <?php include "_hero.php" ?>


    <!-- Main - Directions -->

    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Directions</h1>
                <p> <b> By road </b> <br> <br>
                    If travelling up the A9 from Edinburgh or Perth, turn off at Dalwhinnie onto the A889 to join the A86. 
                    Turn left onto the A86 and we are approximately 23 miles from this junction. 
                    We are on the left hand side of the road just before the Glen Spean Lodge hotel.
                    <br>
                    From Glasgow or Stirling, travel through Fort William on the A82 Inverness road 
                    to Spean Bridge. At Spean Bridge, turn right onto the A86 to Roy 
                    Bridge, continue on the A86 and you will see the Glen Spean Lodge Hotel on your left. 
                    Backpacker's Hostel is just after the hotel on the right hand side of 
                    the A86 down a little road.

                </p> 
                <p>   
                <b> Public transport </b> <br> <br>
                    There are several buses and trains a day between Fort William and Roy Bridge 
                    and we will pick folk up from the train or bus in Roy Bridge if notified 
                    by phone call prior to arrival and if we can.
                </p>
            </article>
            
                <aside id="sidebar">
                    <div class="dark">
                        <h3>Find Us</h3>
                        <br>
                        <p> <b> Latitude 56.905253 Longitude 04.7941589</b></p>
                        <p>We are located 2 miles east of Roy Bridge on the A86 
                            ,on the opposite side of the A86 to the Glen Spean Lodge Hotel.15 
                            miles north east of Fort William.
                        </p>
                        <p>
                            PLEASE DO NOT GO UP TO THE HOSTEL RELYING ON YOUR GPS 
                            as several properties share the same postcode.
                      </p>
                    </div> 
                </aside>
            </div>
        </div>
    </section>
    

    <section class="map">
            <h2 style="text-align: center;">Find Us on a Map</h2>
            <div id="googleMap"></div>
    </section>
    <script src="../hostel3/scripts/scripts.js"></script>
    <!-- <script src="../hostel3/scripts/scripts.js"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBH0EBPlFaX4TgGK_RPJI5gFAFuDN2y2tA&callback=initMap"></script>
    


    

    <footer>
        <p>Backpacker Hostel, Copyright  &copy; 2019</p>
    </footer>

    
</body>
</html>