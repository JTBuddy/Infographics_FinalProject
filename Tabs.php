<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>iPhone vs Android</h2>
  <p style="padding: 40px; font-size: 18px; margin-top: -25px;">
  Below show the interest of both iPhone and Adroid on Google. The values are displayed as such: <br>
    <i>
    Numbers represent search interest relative to the highest point on the chart for the given region and time. A value of 100 is the peak popularity for the term. A value of 50 means that the term is half as popular. A score of 0 means there was not enough data for this term.
    </i>
  </p>
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Index</a></li>
    <li><a data-toggle="pill" href="#menu1">Comparison</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    
    <div id="menu1" class="tab-pane fade">
 <!-- Android vs iPhone from Google Trends Comparison -->
                  <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/2431_RC04/embed_loader.js"></script> <script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"/m/027lnzs","geo":"","time":"all"},{"keyword":"Android","geo":"","time":"all"}],"category":0,"property":""}, {"exploreQuery":"date=all&q=%2Fm%2F027lnzs,Android","guestPath":"https://trends.google.com:443/trends/embed/"}); </script>
    </div>
  </div>
</div>

</body>
</html>
