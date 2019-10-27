<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backpacker Hostel | Contact</title>
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
                    <li class="current"> <a href="cafe.php">Cafe</a></li>
                    <li> <a href="directions.php">Getting Here</a></li>
                    <li> <a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- hero and newsletter -->
    <?php include "_hero.php" ?>


    <!-- Section: Contact -->

    <section class="contact_form" id="s_contact">
            <div class="container">
              <h2>Contact Us</h2>
              <p>Drop Us a line</p>
              
              <div class="column">
                <form method="POST" action="../hostel3/contactInsert.php" >

                <!-- Side -->
                <div class="full-name">
                    <div class="cell">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" placeholder="Your first name..">
                    </div>
                    <div class="cell">
                        <label for="fname">Last Name</label>
                        <input type="text" id="lname" name="lname" placeholder="Your last name..">
                    </div>
                </div>

                  <label for="email">Email</label>
                  <input type="text" id="email" name="email" placeholder="Your Email..">
                  <label for="subject">Subject</label>
                  <textarea id="message" name="message" placeholder="Write something.." style="height:170px"></textarea>
                  <input type="submit" value="Submit">
                </form>
              </div>
              <div class="column">
                    <div id="googleMap"></div>
                    <script src="../hostel3/scripts/scripts.js"></script>
                    <!-- <script src="../hostel3/scripts/scripts.js"></script> -->
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBH0EBPlFaX4TgGK_RPJI5gFAFuDN2y2tA&callback=initMap"></script>
              </div>
            </div>
    </section>
    <footer>
        <p>Backpacker Hostel, Copyright  &copy; 2019</p>
    </footer>    
</body>
</html>