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
                <li> <a href="cafe.php">Cafe</a></li>
                <li> <a href="directions.php">Getting Here</a></li>
                <li> <a href="contact.php">Contact</a></li>
                <li  class="current"> <a href="survey.php">Survey</a></li>
            </ul>
        </nav>
    </div>
</header>
    <!-- hero and newsletter -->
<?php include "_hero.php" ?>


    <!-- Section: survey -->
    <div class="container survey">
    <form id="survey" method="POST" action="#">

    <h2>Survey</h2>
    <h3>Since you got nothing better to do, please fill out this survey...</h3>

    <h4>How do you travel to wrok?</h4>
    <input id="work-bus" type="checkbox" name="bus"><label for="work-bus">Bus</label>
    <br>
    <input id="work-car" type="checkbox" name="car"><label for="work-car">Car</label>
    <br>
    <input id="work-walk" type="checkbox" name="walk"><label for="work-walk">Walk</label>
    <br>
    <br>

    <fieldset>
    <legend>Some other questions</legend>

    <h4>Choose whatever feels right</h4>
    <p>... or just tell us wchich mode of tramsport did you use most recentley</p>
    <input id="transport-bus" type="radio" name="bus"><label for="transport-bus">Bus</label>
    <br>
    <input id="transport-bus" type="radio" name="bus"><label for="format-h">Car</label>
    
    <h4>How often do you look out the window?</h4>
    <select id="frequency">
        <option value="daily">Daily</option>
        <option value="weekly">Weekly</option>
        <option value="monthly">Monthly</option>
    </select>
    <br>

    <h4>Comments</h4>
    <textarea name="requests" rows="3" cols="30" placeholder="Please type something here.... or not."></textarea>

</fieldset>

<h4>Email</h4>
<input id="email" type="text" size="45" placeholder="Enter your email address">
<br>

<input type="submit" value="Click Me">

</form>
    </div>


    <footer>
        <p>Backpacker Hostel, Copyright  &copy; 2019</p>
    </footer>    
</body>
</html>