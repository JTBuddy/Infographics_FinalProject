<?php?>

<html>
    <head>
        <title>Infographics Final Project</title>

        <!-- Bootstrap CDN and CSS -->
        <link rel="stylesheet" href="Styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fonts -->
        <!-- Montserrat -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    </head>
    <body style="background-color: #f1f1f1;">
        <div class="jumbotron jumbotron-fluid">
            <div class="container" id="jumboContainer">
                <h1 style="font-size: 60px;"><!--Infographics and Data--> The Evolution of</h1>
                <h1 class="strokeText" style="-webkit-text-stroke: 1.5px white; -webkit-text-fill-color: transparent; font-size: 75px;"><!-- Visualisation Project-->Mobile Phones</h1>
            </div>
        </div>


        <div class="container" id="mainContainer">
            
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading">OS Systems</h3>
                    </div>
                    
                    <div class="col-12">
                        <!-- <p class="infoText" style="padding-left: 45px;">test</p> -->
                        <div id="all-comparison-ww-monthly-201103-202103" width="900" height="400" style="width:900px; height: 400px;"></div><!-- You may change the values of width and height above to resize the chart --><p>Source: <a href="https://gs.statcounter.com/platform-market-share#monthly-201103-202103">StatCounter Global Stats - Platform Comparison Market Share</a></p><script type="text/javascript" src="https://www.statcounter.com/js/fusioncharts.js"></script><script type="text/javascript" src="https://gs.statcounter.com/chart.php?all-comparison-ww-monthly-201103-202103&chartWidth=600"></script>
                    </div>
                </div>

                <div class="row" id="infoRow">
                    <h3 class="heading">Usage</h3>
                </div>

                <div class="row" id="infoRow">
                    <h3 class="heading">References</h3>
                </div>

                <div class="row" id="footer">
                    <div class="col">
                        <h4 class="footTitle"><a class="links" href="#">OS Systems</a></h4>
                    </div>

                    <div class="col">
                        <h4 class="footTitle"><a class="links" href="#">Brand Usage</a></h4>
                    </div>

                    <div class="col">
                        <h4 class="footTitle"><a class="links" href="#">Test</a></h4>
                    </div>
                </div>
                
            
        </div> <!-- end of container -->

        <br><br>
    </body>
</html>