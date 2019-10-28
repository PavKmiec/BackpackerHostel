<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

    <div class="container">
    <div id="chart"> </div>

    Charts , data , apis will go here 
    </div>
    <div class="container">
        <div class="row">
            <div class="span6" id="search">
                <div class="well">
                    <h1>Search for a job:</h1>
                    <input type="text" id="search-input" placeholder="Job Keywords">
                    <button class="btn" id="search-go">Search</button>
                </div>
            </div>
            <div class="span6" id="list">
                <div class="well">
                    <h2>Select the job you want:</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>SOC Code</th>
                                <th>Job Title</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span6" id="info">
                <div class="well">
                    <h2>Job Information</h2>
                    <div id="info-box">
                        <h3></h3>
                        <p class="first"></p>
                        <p class="second"></p>
                    </div>
                </div>
            </div>
            <div class="span6" id="graph">
                <div class="well">
                    <h2>Pay Information</h2>
                    <div id="graph-box"></div>
                </div>
            </div>
        </div>
    </div>

    <script>

var getInfo = function(soc) {
    $.get("http://api.lmiforall.org.uk/api/v1/soc/code/" + soc, function(data) {
        $("#info-box h3").text(data.title);
        $("#info-box p.first").text(data.description);
        $("#info-box p.second").text(data.tasks);
    });
    $.get("http://api.lmiforall.org.uk/api/v1/ashe/estimatePay",
    { soc: soc, coarse: "false", breakdown: "gender"},
    function(data) {
        $("#graph-box").html("<p><b>Male:</b> " + data.series[0].breakdown[1].estpay + " GBP/week </p>" +
            "<p><b>Female:</b> " + data.series[0].breakdown[0].estpay + " GBP/week </p>");
    });
};

$(function() {
    $("#search-go").click(function() {
        $.get("http://api.lmiforall.org.uk/api/v1/soc/search", { q: $("#search-input").val() }, function(data, status) {
            $("#list table tbody").empty();
            $.each(data, function(i, e) {
                var tr = $("<tr><td>" + e.soc + "</td><td>" + e.title + "</td></tr>");
                (function(tr, soc) {
                    tr.click(function() {
                        getInfo(soc);
                    });
                })(tr, e.soc);
                $("#list table tbody").append(tr);
            });
        }, "json");
    });
});
    </script>
    


    <footer>
        <p>Backpacker Hostel, Copyright  &copy; 2019</p>
    </footer>    
</body>
</html>