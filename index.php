<!DOCTYPE html>
<html>
  <head>
    <title>Uvic Food</title>
      <link rel="stylesheet" type="text/css" href="main.css" media="screen" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

    <?php $today = date('l'); ?>

    <div class="container">
      <div class="row text-center">
        <h1>UVic Restaurant Open/Close</h1>
      </div>
      <hr>
      <div class="row text-center timenow">
        <h2>Current Time:</h2>
        <h3><?php echo date('l M jS h:i A'); ?></h3>
      </div>
      <hr>
      <div class="col-md-1">
        <?php
          if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday") && (date('H') >= 8) && (date('H') <= 15) || (($today == "Friday") && (date('H') >= 8) && (date('H') <= 14))){
            echo '<img src="/images/green-dot.png">';
          } else {
            echo '<img src="/images/red-dot.png">';
          }
        ?>
      </div>
      <div class="col-md-2">
        <h3><a href="http://www.uvic.ca/services/food/where/artsplace/index.php">Arts Place</a></h3>
      </div>
      <div class="col-md-9">
    		<p>Award winning! Located in the Fine Arts building, Arts Place recently received an award for interior beauty in the wood design category. Bistro seating inside with seating areas directly outside.</p>
        <ul>
          <li>specialty coffees and teas</li>
          <li>alternate beverages</li>
          <li>salads</li>
          <li>sandwiches and wraps</li>
          <li>pastries, cakes and other sweets</li>
        </ul>
      </div>
      <div class="col-md-1">
        <?php
          // $open_days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
          // foreach ($open_days as $value) {
          //   if ($today == $value) {
          //     echo '<a href="www.castanet.net"><img src="/images/green-dot.png"></a>';
          //   } else {
          //     echo '<img src="/images/red-dot.png">';
          //   }
          // }
          if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday") && (date('H') >= 8) && (date('H') <= 21) || (($today == "Friday") && (date('H') >= 8) && (date('H') <= 16) || ($today == "Saturday") && (date('H') >= 10) && (date('H') <= 16) || ($today == "Sunday") && (date('H') >= 10) && (date('H') <= 21))){
            echo '<img src="/images/green-dot.png">';
          } else {
            echo '<img src="/images/red-dot.png">';
          }
        ?>
      </div>
      <div class="col-md-2">
        <h3><a href="http://www.uvic.ca/services/food/where/bibliocafe/index.php">Bibliocafé</a></h3>
      </div>
      <div class="col-md-9">
    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      <div class="col-md-1">
        <?php
          if ((date('H') >= 7 && (date('i') < 30)) && (date('H') < 23 && (date('i') < 55)) ){
            echo '<img src="/images/green-dot.png">';
          } else {
            echo '<img src="/images/red-dot.png">';
          }
        ?>
      </div>
      <div class="col-md-2">
        <h3><a href="http://www.uvic.ca/services/food/where/cadborocommons/index.php">Cadboro Commons</a></h3>
      </div>
      <div class="col-md-9">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      <div class="col-md-1">
        <?php
          if ((date('H') >= 11 && (date('i') < 30)) && (date('H') < 23 && (date('i') < 30))){
            echo '<img src="/images/green-dot.png">';
          } else {
            echo '<img src="/images/red-dot.png">';
          }
        ?>
      </div>
      <div class="col-md-2">
        <h3><a href="http://www.uvic.ca/services/food/where/capsbistro/index.php">Cap's Bistro</a></h3>
      </div>
      <div class="col-md-9">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      <div class="col-md-1">
        <?php
          if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday" || "Friday") && (date('H') >= 8) && (date('H') < 15)){
            echo '<img src="/images/green-dot.png">';
          } else {
            echo '<img src="/images/red-dot.png">';
          }
        ?>
      </div>
      <div class="col-md-2">
        <h3><a href="http://www.uvic.ca/services/food/where/courtcafe/index.php">Court Café</a></h3>
      </div>
      <div class="col-md-9">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      <div class="col-md-1">
        <?php
          if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday") && (date('H') >= 11) && (date('H') < 18) || ($today == "Friday") && (date('H') >= 11) && (date('H') < 15)){
            echo '<img src="/images/green-dot.png">';
          } else {
            echo '<img src="/images/red-dot.png">';
          }
        ?>
      </div>
      <div class="col-md-2">
        <h3><a href="http://www.uvic.ca/services/food/where/halftime/index.php">Halftime</a></h3>
      </div>
      <div class="col-md-9">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      <div class="col-md-1">
        <?php
        if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday") && (date('H') >= 8) && (date('H') < 16) || ($today == "Friday") && (date('H') >= 8) && (date('H') < 15)){
          echo '<img src="/images/green-dot.png">';
        } else {
          echo '<img src="/images/red-dot.png">';
        }
        ?>
      </div>
      <div class="col-md-2">
        <h3><a href="http://www.uvic.ca/services/food/where/macs/index.php">Macs</a></h3>
      </div>
      <div class="col-md-9">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      <div class="col-md-1">
        <?php
        	if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday") && (date('H') >= 8) && (date('H') < 18) || ($today == "Friday") && (date('H') >= 8) && (date('H') < 15)){
            echo '<img src="/images/green-dot.png">';
          } else {
            echo '<img src="/images/red-dot.png">';
          }
        ?>
      </div>
      <div class="col-md-2">
        <h3><a href="http://www.uvic.ca/services/food/where/nibblesbytes/index.php">Nibbles & Bytes Café</a></h3>
      </div>
      <div class="col-md-9">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      <div class="col-md-1">
        <?php
        if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday" || "Friday") && (date('H') >= 8) && (date('H') < 15)){
          echo '<img src="/images/green-dot.png">';
        } else {
          echo '<img src="/images/red-dot.png">';
        }
        ?>
      </div>
      <div class="col-md-2">
        <h3><a href="http://www.uvic.ca/services/food/where/scicafe/index.php">SciCafé</a></h3>
      </div>
      <div class="col-md-9">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      <div class="col-md-1">
        <?php
      		if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday" || "Friday") && (date('H') >= 11) && (date('H') < 14 && (date('i') < 30)) || ($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday" || "Sunday") && (date('H') >= 16 && (date('i') < 30)) && (date('H') < 19 && (date('i') < 30))){
            echo '<img src="/images/green-dot.png">';
          } else {
            echo '<img src="/images/red-dot.png">';
          }
        ?>
      </div>
      <div class="col-md-2">
        <h3><a href="http://www.uvic.ca/services/food/where/villagegreens/index.php">Village Greens</a></h3>
      </div>
      <div class="col-md-9">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-1">
        <?php
          if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday") && (date('H') >= 11) && (date('H') < 14) || ($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday") && (date('H') >= 16) && (date('H') < 19) || ($today == "Friday") && (date('H') >= 11) && (date('H') < 14) || ($today == "Sunday") && (date('H') >= 16) && (date('H') < 19)){
            echo '<img src="/images/green-dot.png">';
          } else {
            echo '<img src="/images/red-dot.png">';
          }
        ?>
      </div>
      <div class="col-md-2">
        <h4><a href="http://www.uvic.ca/services/food/where/villagegreens/smoothiebar/index.php"> Smoothie Bar</a></h4>
      </div>
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      <div class="col-md-1">
        <?php
      		if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday" || "Friday") && (date('H') >= 11) && (date('H') < 23 && (date('i') < 30)) || ($today == "Saturday" || "Sunday") && (date('H') >= 11 && (date('i') < 30)) && (date('H') < 23 && (date('i') < 30))){
            echo '<img src="/images/green-dot.png">';
          } else {
            echo '<img src="/images/red-dot.png">';
          }
        ?>
      </div>
      <div class="col-md-2">
        <h3><a href="http://www.uvic.ca/services/food/where/villagemarket/index.php">Village Market</a></h3>
      </div>
      <div class="col-md-9">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
    </div>
  </body>

</html>
