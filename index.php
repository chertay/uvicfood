<!DOCTYPE html>
<html>
  <head>
    <title>Uvic Food</title>
      <link rel="stylesheet" type="text/css" href="main.css" media="screen" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

    <?php include 'main.php';?>

    <div class="container">
      <div class="row text-center">
        <h1>UVic Food Services</h1>
      </div>
      <hr class="header">
      <div class="row text-center timenow">
        <h3><?php echo date('l M jS h:i A'); ?></h4>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php arts_place($today, $current_time, $mon_to_thurs, $open_img, $close_img);?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/artsplace/index.php">Arts Place</a></h3>
          <img src="/images/arts-place.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
      		<p>Award winning! Located in the Fine Arts building, Arts Place recently received an award for interior beauty in the wood design category. Bistro seating inside with seating areas directly outside.</p>
          <ul>
            <li>specialty coffees and teas</li>
            <li>alternate beverages</li>
            <li>salads</li>
            <li>sandwiches and wraps</li>
            <li>pastries, cakes and other sweets</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/arts-map.gif" class="location map">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php bibliocafe($today, $current_time, $mon_to_thurs, $open_img, $close_img) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/bibliocafe/index.php">Bibliocafé</a></h3>
          <img src="/images/bibliocafe.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
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
        <div class="col-md-3">
          <img src="/images/biblio-map.gif" class="location map">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php cadboro_commons($current_time, $open_img, $close_img) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3 class="cadboro"><a href="http://www.uvic.ca/services/food/where/cadborocommons/index.php">Cadboro Commons</a></h3>
          <img src="/images/cadboro_commons.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
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
        <div class="col-md-3">
          <img src="/images/cad+caps+markets-map.gif" class="location map">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php caps_bistro($today, $weekdays, $current_time, $open_img, $close_img) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/capsbistro/index.php">Cap's Bistro</a></h3>
          <img src="/images/caps-bistro.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
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
        <div class="col-md-3">
          <img src="/images/cad+caps+markets-map.gif" class="location map">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php court_cafe($today, $weekdays, $current_time, $open_img, $close_img) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/courtcafe/index.php">Court Café</a></h3>
          <img src="/images/court-cafe.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Nestled in the Fraser building with ample indoor seating.</p>
          <ul>
            <li>a selection of wraps and sandwiches</li>
            <li>fresh made salads</li>
            <li>sushi</li>
            <li>pastries and other sweets</li>
            <li>assorted beverages including coffee and tea</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/court-map.gif" class="location map">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php halftime($today, $weekdays, $current_time, $open_img, $close_img) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/halftime/index.php">Halftime</a></h3>
          <img src="/images/halftime.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Located in UVic's Centre for Athletics, Recreation and Special Abilities (CARSA) building just inside the main entrance across from CanAssist.</p>
          <ul>
            <li>smoothie bar</li>
            <li>salads</li>
            <li>sandwiches & wraps</li>
            <li>muffins, sweets & snacks</li>
            <li>sports drinks and a wide assortment of cold beverages</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/halftime-map.jpg" class="location map">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php macs($today, $mon_to_thurs, $current_time, $open_img, $close_img) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/macs/index.php">Macs</a></h3>
          <img src="/images/macs.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Newly revamped with lounge seating and widescreen TVs! Enjoy table and individual seating in a relaxed environment. Located in the MacLaurin Building.</p>
          <ul>
            <li>made to order sandwiches, wraps and salads</li>
            <li>homemade soups and chili</li>
            <li>pastries and other sweets</li>
            <li>a wide selection of beverages</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/mac-map.gif" class="location map">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php mystic_market($today, $mon_to_thurs, $current_time, $open_img, $close_img)?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/mysticmarket/index.php">Mystic Market</a></h3>
          <img src="/images/mystic-market.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
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
        <div class="col-md-3">
          <img src="/images/mystic-map.png" class="location map">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php nibbles_and_bytes($today, $weekdays, $current_time, $open_img, $close_img) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/nibblesbytes/index.php">Nibbles & Bytes</a></h3>
          <img src="/images/nibbles.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
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
        <div class="col-md-3">
          <img src="/images/nibbles-map.gif" class="location map">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php scicafe($today, $weekdays, $current_time, $open_img, $close_img) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/scicafe/index.php">SciCafé</a></h3>
          <img src="/images/scicafe.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
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
        <div class="col-md-3">
          <img src="/images/scicafe-map.gif" class="location map">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php village_greens($today, $mon_to_thurs, $current_time, $open_img, $close_img) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/villagegreens/index.php">Village Greens</a></h3>
          <img src="/images/village-greens.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
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
        <div class="col-md-3">
          <img src="/images/cad+caps+markets-map.gif" class="location map">
        </div>
      </div>
      <hr class="third">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-1">
          <?php smoothie_bar($today, $mon_to_thurs, $current_time, $open_img, $close_img) ?>
        </div>
        <div class="col-md-2 text-right">
          <h4><a href="http://www.uvic.ca/services/food/where/villagegreens/smoothiebar/index.php"> Smoothie Bar</a></h4>
        </div>
        <div class="col-md-8 writeup">
          <p>Village Greens is also home to our fabulous Smoothie Bar. Featuring extended hours, weekly and seasonal specials and more.</p>
          <p>Delicious and nutritious! All smoothies are made with 100% real fruit and are available as vegan or with yogurt. See our smoothie menu board below for a list of our regular flavours.</p>
          <p>Need a healthy boost to fuel your studies or workday? Add green blend, soy or other healthy supplements for just $0.75!</p>
          <p><a href="http://www.uvic.ca/services/food/assets/docs/smoothie_bar_options.pdf">Smoothie Menu</a></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <?php village_market($today, $weekdays, $weekends, $current_time, $open_img, $close_img) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/villagemarket/index.php">Village Market</a></h3>
          <img src="/images/village-market.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Your one-stop campus convenience shop! Provides grab 'n go items as well as packaged foods and ingredients for you to prepare your own culinary creations.</p>
          <ul>
            <li>specialty items such as celiac offerings</li>
            <li>organic section</li>
            <li>fresh produce</li>
            <li>bakery and coffee selections</li>
            <li>household staples from toothpaste to laundry detergent</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/cad+caps+markets-map.gif" class="location map">
        </div>
      </div>
    </div>
  </body>
</html>
