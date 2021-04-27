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

        <!-- data-aos fading lib -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <style>
            html{
                scroll-behavior: smooth;
            }     
 
.b-skills
{
	border-top: 1px solid #f9f9f9;
	padding-top: 46px;
	text-align: center;
}

.b-skills:last-child { margin-bottom: -30px; }

.b-skills h2 { 
    margin-bottom: 50px; 
    font-weight: 500; 
    text-transform: uppercase;}

.skill-item
{
	position: relative;
	max-width: 250px;
	width: 100%;
	margin-bottom: 30px;
	color: #555;
}

.chart-container
{
	position: relative;
	width: 100%;
	height: 0;
	padding-top: 100%;
	margin-bottom: 27px;
}

.skill-item .chart,
.skill-item .chart canvas
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100% !important;
	height: 100% !important;
}

.skill-item .chart:before
{
	content: "";
	width: 0;
	height: 100%;
}

.skill-item .chart:before,
.skill-item .percent
{
	display: inline-block;
	vertical-align: middle;
}

.skill-item .percent
{
	position: relative;
	line-height: 1;
	font-size: 40px;
	font-weight: 900;
	z-index: 2;
}

.skill-item  .percent:after
{
	content: attr(data-after);
	font-size: 20px;
}
        </style>
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
                    <p style="font-size: 20px; padding: 0px 50px 0px 50px;">
                    Mobile phones started off with one feature, to call other mobile or landline phone. 
                    Today high-end mobile phones are more powerful than some computers. 
                    More and more features have been added to phones including cameras, tracking, GPS and even online banking. 
                    The rise of mobbile phones wouldn't be possible without the help of:
                    </p>

                    <br><br>

                    <ul style="font-size: 20px; margin-left: 65px;">
                        <li style="padding-top: 20px;">The Internet</li>
                        <li style="padding-top: 20px;">Social Media</li>
                        <li style="padding-top: 20px;">Merging Technology</li>
                    </ul>

                    <br>

                    <!-- Banner Image -->
                    <img src="ScreenSize.png" alt="Phone History" style="width: 100%;" data-aos="fade-up" data-aos-duration="3000">

                    <!-- Animated Pie Charts -->
                    
                    <br style="margin-top: 50px;">
	 
     <section id="s-team" class="section" style="align-content: center; margin-top: -60px; margin-bottom: 100px;" data-aos="fade-up" data-aos-duration="3000">

         <div class="b-skills" id="phonePhacts">
             <div class="container">
                 <h2 style="font-family: 'Montserrat', sans-serif; font-size: 45px;"><b style="color: #5bb1db;">Ph</b>one <b style="color: #5bb1db;">Ph</b>acts</h2>

                 <div class="row">
                     <div class="col-xs-12 col-sm-4 col-md-4">
                         <div class="skill-item center-block">
                             <div class="chart-container">
                                 <div class="chart " data-percent="70" data-bar-color="#509abe">
                                     <span class="percent" data-after="%">70</span>
                                 </div>
                             </div>

                             <p style="font-size: 20px;">...of web traffic is on mobile phones</p>
                         </div>
                     </div>

                     <div class="col-xs-12 col-sm-4 col-md-4">
                         <div class="skill-item center-block">
                             <div class="chart-container">
                                 <div class="chart " data-percent="94" data-bar-color="#5bb1db">
                                     <span class="percent" data-after="%">94</span>
                                 </div>
                             </div>

                             <p style="font-size: 20px;">...of people aged between 18 to 29 have smartphones</p>
                         </div>
                     </div>

                     <div class="col-xs-12 col-sm-4 col-md-4">
                         <div class="skill-item center-block">
                             <div class="chart-container">
                                 <div class="chart " data-percent="99" data-bar-color="#79dfe7">
                                     <span class="percent" data-after="%">99</span>
                                 </div>
                             </div style="font-size: 20px;">

                             <p style="font-size: 20px;">...of people still use their mobile device as an alarm clock</p>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </section>
     <br><br><br><br><br><br><br>
     <!-- end of pie charts -->

                </div> <!-- end of section1 -->

                <div class="row" data-aos="fade-up" data-aos-duration="3000">
                    <h3 class="heading" style="padding-left: 20px; margin-top: -50px;" id="section2">Growth in Phone Popularity</h3>

                    <!-- Tabs -->
                    <?php include 'Tabs.php'?>

                </div> <!-- end of section2 -->

                <?php include 'Ref.php'?>

                <br>

                <!-- footer -->
                <div class="row" id="footer">
                    <div class="col">
                        <h4 class="footTitle"><a class="links" href="#section1">Introduction</a></h4>
                    </div>

                    <div class="col">
                        <h4 class="footTitle"><a class="links" href="#section2">Growth in Phone Popularity</a></h4>
                    </div>

                    <div class="col">
                        <h4 class="footTitle"><a class="links" href="#phonePhacts">Phone Phacts</a></h4>
                    </div>
                </div> <!-- end of footer-->
      
        </div> <!-- end of container -->
    
    <br>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="plugins/jquery-2.2.4.min.js"></script>
    <script src="plugins/jquery.appear.min.js"></script>
    <script src="plugins/jquery.easypiechart.min.js"></script> 
    <script>
    AOS.init();

    'use strict';

var $window = $(window);

function run()
{
	var fName = arguments[0],
		aArgs = Array.prototype.slice.call(arguments, 1);
	try {
		fName.apply(window, aArgs);
	} catch(err) {
		 
	}
};
 
/* chart
================================================== */
function _chart ()
{
	$('.b-skills').appear(function() {
		setTimeout(function() {
			$('.chart').easyPieChart({
				easing: 'easeOutElastic',
				delay: 5000,
				barColor: '#369670',
				trackColor: '#fff',
				scaleColor: false,
				lineWidth: 21,
				trackWidth: 21,
				size: 250,
				lineCap: 'round',
				onStep: function(from, to, percent) {
					this.el.children[0].innerHTML = Math.round(percent);
				}
			});
		}, 150);
	});
};
 

$(document).ready(function() {
  
	run(_chart);
  
    
});


    
    </script>

  </body>
</html>
