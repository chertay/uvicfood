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
      <div class="row">
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
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php
            // $reg_hours = array("Monday", "Tuesday", "Wednesday", "Thursday", "Sunday");
            // foreach ($open_weekdays as $value) {
            //   if (($today == $value) && (date('H') >= 8) && (date('H') <= 21))  {
            //     echo '<img src="/images/green-dot.png">';
            //   } else {
            //     echo '<img src="/images/red-dot.png">';
            //   }
            // }
            if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday") && (date('H') >= 8) && (date('H') <= 21) || (($today == "Friday") && (date('H') >= 8) && (date('H') <= 16) || ($today == "Saturday") && (date('H') >= 10) && (date('H') <= 16)
            || ($today == "Sunday") && (date('H') >= 10) && (date('H') <= 21))){
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
      		<p>Surrounded by glass, view the vivid seasonal changes while enjoying your selection – indoors with ample booth, table and comfortable circle chairs or outdoors with patio seating.</p>
          <ul>
            <li>specialty coffees and teas</li>
            <li>our signature five star sandwiches, wraps and buns</li>
            <li>salads</li>
            <li>pastry rolls</li>
            <li>samosas</li>
            <li>cakes, squares, pastries and other sweets</li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
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
          <p>Come see what you’ve been missing! Large indoor seating allows for study area, private or group seating.</p>
          <ul>
            <li>made to order grill items</li>
            <li>daily hot meals</li>
            <li>salad bar</li>
            <li>wraps and sandwiches</li>
            <li>sushi</li>
            <li>fresh made soup</li>
            <li>fruit, pastries and other sweets</li>
            <li>an assortment of beverages including fresh coffee and tea</li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
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
          <p>Offers charming table seating with natural lighting, as well as TV lounge area for leisure.</p>
          <ul>
            <li>made to order sandwiches and wraps</li>
            <li>pizza and pasta bar</li>
            <li>soups</li>
            <li>salads</li>
            <li>pastries and sweets</li>
            <li>specialty coffee and a variety of beverages</li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
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
          <p>Nestled in the Fraser building with ample indoor seating.</p>
          <ul>
            <li>a selection of wraps and sandwiches</li>
            <li>fresh made salads</li>
            <li>sushi</li>
            <li>pastries and other sweets</li>
            <li>assorted beverages including coffee and tea</li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
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
          <p>Located in UVic's Centre for Athletics, Recreation and Special Abilities (CARSA) building just inside the main entrance across from CanAssist.</p>
          <ul>
            <li>smoothie bar</li>
            <li>salads</li>
            <li>sandwiches & wraps</li>
            <li>muffins, sweets & snacks</li>
            <li>sports drinks and a wide assortment of cold beverages</li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
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
          <p>Newly revamped with lounge seating and widescreen TVs! Enjoy table and individual seating in a relaxed environment. Located in the MacLaurin Building.</p>
          <ul>
            <li>made to order sandwiches, wraps and salads</li>
            <li>homemade soups and chili</li>
            <li>pastries and other sweets</li>
            <li>a wide selection of beverages</li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
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
          <h3><a href="http://www.uvic.ca/services/food/where/mysticmarket/index.php">Mystic Market</a></h3>
        </div>
        <div class="col-md-9">
          <p>Featuring 8 unique food kiosks that offer a diverse range of in-house prepared meals as well as a general store for pre-packaged foods and quick convenience items.</p>
          <p>With a modern, market-style layout and West Coast inspired design and décor, UVic’s newly launched Mystic Market sets a new standard in campus dining, creating a truly unique dining experience.</p>
          <p>Mystic is also the first <strong>ZERO</strong> Waste facility on campus.</p>
          <h4>Mystic Market Menus:</h4>
          <ul class="horizontal_list">
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Basecamp%20menu.pdf">Basecamp</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Boardwalk-menu.pdf">Boardwalk Cafe</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Chopbox-menu.pdf">Chopbox</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Flamin-menu.pdf">Flamin' Good</a></li>
            <li><a href="#">Professor Franks</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Tofino-menu.pdf">Tofino's</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Treks%20-%20menu.pdf">Treks</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Vegout-menu.pdf">Vegout</a></li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
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
          <p>Your Engineering Lab Wing food destination!</p>
          <ul>
            <li>freshly made gourmet pizza</li>
            <li>wraps and sandwiches</li>
            <li>salads</li>
            <li>breakfast sandwiches</li>
            <li>pastries and other sweets</li>
            <li>a range of beverages including fresh coffee and tea</li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
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
          <p>Comfortable bright seating area complete with natural lighting provides a perfect place to enjoy your selection.</p>
          <ul>
            <li>paninis and calzones</li>
            <li>homemade soups and chilli</li>
            <li>sandwiches and wraps</li>
            <li>mixed salads</li>
            <li>breakfast sandwiches</li>
            <li>pastries and other sweets</li>
            <li>assorted beverages including fresh coffee and tea</li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
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
          <p>Award winning vegetarian and vegan options. Enjoy booth or table seating with a trendy ambience and natural lighting. Choose a table by the window or outdoor patio seating. Located in the Cadboro Commons building.</p>
          <ul>
            <li>daily hot meals</li>
            <li>homemade soups and chilli</li>
            <li>fresh stir fry</li>
            <li>fruit, pastries, and other sweets</li>
            <li>smoothie bar</li>
            <li>assorted beverages including coffee & tea</li>
          </ul>
          <p><strong>Hot food served:</strong></p>
          <p><strong>Lunch:</strong> 11:00am - 2:30pm</p>
          <p><strong>Dinner:</strong> 4:30pm - 7:30pm</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-1">
          <?php
            if (($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday") && (date('H') >= 11) && (date('H') < 14) || ($today == "Monday" || "Tuesday" || "Wednesday" || "Thursday") && (date('H') >= 16) && (date('H') < 19) || ($today == "Friday") && (date('H') >= 11) && (date('H') < 14) || ($today == "Sunday") && (date('H') >= 16) && (date('H') < 19)){
              echo '<img src="/images/green-dot.png" class="smaller_dot">';
            } else {
              echo '<img src="/images/red-dot.png" class="smaller_dot">';
            }
          ?>
        </div>
        <div class="col-md-2">
          <h4><a href="http://www.uvic.ca/services/food/where/villagegreens/smoothiebar/index.php"> Smoothie Bar</a></h4>
        </div>
        <div class="col-md-8">
          <p>Village Greens is also home to our fabulous Smoothie Bar. 100% real fruit. 100% delicious. Featuring extended hours, weekly and seasonal specials and more.</p>
        </div>
      </div>
      <hr>
      <div class="row">
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
          <p>Your one-stop campus convenience shop! Provides grab 'n go items as well as packaged foods and ingredients for you to prepare your own culinary creations.</p>
          <ul>
            <li>specialty items such as celiac offerings</li>
            <li>organic section</li>
            <li>fresh produce</li>
            <li>bakery and coffee selections</li>
            <li>household staples from toothpaste to laundry detergent</li>
          </ul>
        </div>
      </div>
    </div>
  </body>

</html>
