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
  <body>

    <div class="jumbotron jumbotron-fluid">
            <div class="container" id="jumboContainer">
                <h1 style="font-size: 60px; font-family: 'Montserrat', sans-serif;"><!--Infographics and Data--> The Rise of</h1>
                <h1 class="strokeText" style="-webkit-text-stroke: 1.5px white; -webkit-text-fill-color: transparent; font-size: 75px; font-family: 'Montserrat', sans-serif;"><!-- Visualisation Project-->Mobile Phones</h1>
            </div>
        </div>


        <div class="container" id="mainContainer">
            
                <div class="row" id="section1">
                    <h3 class="heading" style="padding-left: 20px;">Introduction</h3>
                    <p style="font-size: 20px; padding: 0px 50px 0px 50px;">With the explosive popularity with social media apps like Facebook, Instagram and Twitter I believe that this one of the main catalysts of the rapid growth of mobile phone usage.</p>
                </div> <!-- end of section1 -->

                <div class="row" id="section2">
                    <!-- Banner Image -->
                    <img src="PhoneHistory.png" alt="Phone History" style="width: 100%;">

                    <h3 class="heading" style="padding-left: 20px; margin-top: -50px;">Reasons</h3>

                    <!-- Tabs -->
                    <?php include 'Tabs.php'?>

                </div> <!-- end of section2 -->

                <div class="row" id="section3">
                    <h3 class="heading" style="padding-left: 20px;">References</h3>
                </div> <!-- end of section3 -->
          
                <div>
                  <p style="font-size: 20px; padding-left: 50px;"><a href="https://data.world/makeovermonday/2019w47">2015-2019 Ownership of Phones</a></p>
                  <p style="font-size: 20px; padding-left: 50px;"><a href="https://data.world/makeovermonday/2019w47">Social Media Graph</a></p>
                  <p style="font-size: 20px; padding-left: 50px;"><a href="https://data.world/makeovermonday/2019w47">Brands Sold Yearly Graph</a></p>
                </div>

                <!-- footer -->
                <div class="row" id="footer">
                    <div class="col">
                        <h4 class="footTitle"><a class="links" href="#section1">Introduction</a></h4>
                    </div>

                    <div class="col">
                        <h4 class="footTitle"><a class="links" href="#section2">Reasons</a></h4>
                    </div>

                    <div class="col">
                        <h4 class="footTitle"><a class="links" href="#section3">References</a></h4>
                    </div>
                </div> <!-- end of footer-->
      
        </div> <!-- end of container -->
    
    <br>

  </body>
</html>
