<!DOCTYPE html>
<html>
  <head>
    <title>Uvic Food (mobile)</title>
      <link rel="stylesheet" type="text/css" href="/style/main.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <meta name="viewport" content="width: device_width, initial-scale=1.0">
  </head>
  <?php ob_start(); ?>
  <body>

    <?php include 'main.php';?>

    <div class="header">
      <div class="row text-center">
        <h1 id="title">UVic Food Services</h1>
      </div>
      <div class="row text-center timenow">
        <h2 id="day-time"><?php echo date('l M jS g:i A');?></h2>
      </div>
    </div>
    <div class="container-fluid text-center blue-back">
      <div class="row">
        <h2><a class="white-text" href="http://www.uvic.ca/services/food/where/artsplace/index.php">Arts Place</a></h2>
        <img src="/images/storefronts/arts-place.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php arts_place($today, $current_time, $mon_to_thurs, $open_img, $close_img); ?>
      </div>
        <div class="row writeup">
          <p>Award winning! Located in the Fine Arts building, Arts Place recently received an award for interior beauty in the wood design category. Bistro seating inside with seating areas directly outside.</p>
          <p>•  specialty coffees and teas</p>
          <p>•  alternate beverages</p>
          <p>•  salads</p>
          <p>•  sandwiches and wraps</p>
          <p>•  pastries, cakes and other sweets</p>
        </div>
      <div class="row">
        <img src="/images/maps/arts-map.gif" class="location map">
      </div>
    </div>
    <div class="container-fluid text-center white-back">
      <div class="row">
        <h2><a class="blue-text"  href="http://www.uvic.ca/services/food/where/bibliocafe/index.php">Bibliocafé</a></h2>
        <img src="/images/storefronts/bibliocafe.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php bibliocafe($today, $current_time, $mon_to_thurs, $open_img, $close_img) ?>
      </div>
      <div class="row writeup">
    		<p>Surrounded by glass, view the vivid seasonal changes while enjoying your selection – indoors with ample booth, table and comfortable circle chairs or outdoors with patio seating.</p>
        <p>•  specialty coffees and teas</p>
        <p>•  our signature five star sandwiches, wraps and buns</p>
        <p>•  salads</p>
        <p>•  pastry rolls</p>
        <p>•  samosas</p>
        <p>•  cakes, squares, pastries and other sweets</p>
      </div>
      <div class="row">
        <img src="/images/maps/biblio-map.gif" class="location map">
      </div>
    </div>
    <div class="container-fluid text-center blue-back">
      <div class="row">
        <h2><a class="white-text"  href="http://www.uvic.ca/services/food/where/cadborocommons/index.php">Cadboro Commons</a></h2>
        <img src="/images/storefronts/cadboro_commons.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php cadboro_commons($today, $current_time, $open_img, $close_img) ?>
      </div>
      <div class="row writeup">
        <p>Come see what you’ve been missing! Large indoor seating allows for study area, private or group seating.</p>
        <p>•  made to order grill items</p>
        <p>•  daily hot meals</p>
        <p>•  salad bar</p>
        <p>•  wraps and sandwiches</p>
        <p>•  sushi</p>
        <p>•  fresh made soup</p>
        <p>•  fruit, pastries and other sweets</p>
        <p>•  an assortment of beverages including fresh coffee and tea</p>
      </div>
      <div class="row">
        <img src="/images/maps/cad+caps+markets-map.gif" class="location map">
      </div>
    </div>
    <div class="container-fluid text-center white-back">
      <div class="row">
        <h2><a class="blue-text"  href="http://www.uvic.ca/services/food/where/capsbistro/index.php">Cap's Bistro</a></h2>
        <img src="/images/storefronts/caps-bistro.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php caps_bistro($today, $weekdays, $weekends, $current_time, $open_img, $close_img) ?>
      </div>
      <div class="row writeup">
        <p>Offers charming table seating with natural lighting, as well as TV lounge area for leisure.</p>
        <p>•  made to order sandwiches and wraps</p>
        <p>•  pizza and pasta bar</p>
        <p>•  soups</p>
        <p>•  salads</p>
        <p>•  pastries and sweets</p>
        <p>•  specialty coffee and a variety of beverages</p>
      </div>
      <div class="row">
        <img src="/images/maps/cad+caps+markets-map.gif" class="location map">
      </div>
    </div>
    <div class="container-fluid text-center blue-back">
      <div class="row">
        <h2><a class="white-text"  href="http://www.uvic.ca/services/food/where/courtcafe/index.php">Court Café</a></h2>
        <img src="/images/storefronts/court-cafe.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php court_cafe($today, $weekdays, $current_time, $open_img, $close_img) ?>
      </div>
      <div class="row writeup">
        <p>Nestled in the Fraser building with ample indoor seating.</p>
        <p>•  a selection of wraps and sandwiches</p>
        <p>•  fresh made salads</p>
        <p>•  sushi</p>
        <p>•  pastries and other sweets</p>
        <p>•  assorted beverages including coffee and tea</p>
      </div>
      <div class="row">
        <img src="/images/maps/court-map.gif" class="location map">
      </div>
    </div>
    <div class="container-fluid text-center white-back">
      <div class="row">
        <h2><a class="blue-text"  href="http://www.uvic.ca/services/food/where/halftime/index.php">Halftime</a></h2>
        <img src="/images/storefronts/halftime.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php halftime($today, $weekdays, $current_time, $open_img, $close_img) ?>
      </div>
      <div class="row writeup">
        <p>Located in UVic's Centre for Athletics, Recreation and Special Abilities (CARSA) building just inside the main entrance across from CanAssist.</p>
        <p>•  smoothie bar</p>
        <p>•  salads</p>
        <p>•  sandwiches & wraps</p>
        <p>•  muffins, sweets & snacks</p>
        <p>•  sports drinks and a wide assortment of cold beverages</p>
      </div>
      <div class="row">
        <img src="/images/maps/halftime-map.jpg" class="location map">
      </div>
    </div>
    <div class="container-fluid text-center blue-back">
      <div class="row">
        <h2><a class="white-text"  href="http://www.uvic.ca/services/food/where/macs/index.php">Macs</a></h2>
        <img src="/images/storefronts/macs.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php macs($today, $mon_to_thurs, $current_time, $open_img, $close_img) ?>
      </div>
      <div class="row writeup">
        <p>Newly revamped with lounge seating and widescreen TVs! Enjoy table and individual seating in a relaxed environment. Located in the MacLaurin Building.</p>
        <p>•  made to order sandwiches, wraps and salads</p>
        <p>•  homemade soups and chili</p>
        <p>•  pastries and other sweets</p>
        <p>•  a wide selection of beverages</p>
      </div>
      <div class="row">
        <img src="/images/maps/mac-map.gif" class="location map">
      </div>
    </div>
    <div class="container-fluid text-center white-back">
      <div class="row">
        <h2><a class="blue-text"  href="http://www.uvic.ca/services/food/where/mysticmarket/index.php">Mystic Market</a></h2>
        <img src="/images/storefronts/mystic-market.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php mystic_market($today, $mon_to_thurs, $weekends, $current_time, $open_img, $close_img) ?>
      </div>
      <div class="row writeup">
        <p>Featuring 8 unique food kiosks that offer a diverse range of in-house prepared meals as well as a general store for pre-packaged foods and quick convenience items.</p>
        <p>With a modern, market-style layout and West Coast inspired design and décor, UVic’s newly launched Mystic Market sets a new standard in campus dining, creating a truly unique dining experience.</p>
        <p>Mystic is also the first <strong>ZERO</strong> Waste facility on campus.</p>
        <h4>Mystic Market Menus:</h4>
          <div class="mystic-menus">
            <a href="http://www.uvic.ca/services/food/assets/docs/Basecamp%20menu.pdf">Basecamp</a>
            <a href="#">Professor Franks</a>
            <a href="http://www.uvic.ca/services/food/assets/docs/Boardwalk-menu.pdf">Boardwalk Cafe</a>
            <a href="http://www.uvic.ca/services/food/assets/docs/Chopbox-menu.pdf">Chopbox</a>
            <a href="http://www.uvic.ca/services/food/assets/docs/Tofino-menu.pdf">Tofino's</a>
            <a href="http://www.uvic.ca/services/food/assets/docs/Flamin-menu.pdf">Flamin' Good</a>
            <a href="http://www.uvic.ca/services/food/assets/docs/Treks%20-%20menu.pdf">Treks</a>
            <a href="http://www.uvic.ca/services/food/assets/docs/Vegout-menu.pdf">Vegout</a>
          </div>
      </div>
      <div class="row">
        <img src="/images/maps/mystic-map.png" class="location map">
      </div>
    </div>
    <div class="container-fluid text-center blue-back">
      <div class="row">
        <h2><a class="white-text"  href="http://www.uvic.ca/services/food/where/nibblesbytes/index.php">Nibbles & Bytes</a></h2>
        <img src="/images/storefronts/nibbles.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php nibbles_and_bytes($today, $weekdays, $current_time, $open_img, $close_img) ?>
      </div>
      <div class="row writeup">
        <p>Your Engineering Lab Wing food destination!</p>
        <p>•  freshly made gourmet pizza</p>
        <p>•  wraps and sandwiches</p>
        <p>•  salads</p>
        <p>•  breakfast sandwiches</p>
        <p>•  pastries and other sweets</p>
        <p>•  a range of beverages including fresh coffee and tea</p>
      </div>
      <div class="row">
        <img src="/images/maps/nibbles-map.gif" class="location map">
      </div>
    </div>
    <div class="container-fluid text-center white-back">
      <div class="row">
        <h2><a class="blue-text"  href="http://www.uvic.ca/services/food/where/scicafe/index.php">SciCafé</a></h2>
        <img src="/images/storefronts/scicafe.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php scicafe($today, $weekdays, $current_time, $open_img, $close_img) ?>
      </div>
      <div class="row writeup">
        <p>Comfortable bright seating area complete with natural lighting provides a perfect place to enjoy your selection.</p>
        <p>•  paninis and calzones</p>
        <p>•  homemade soups and chilli</p>
        <p>•  sandwiches and wraps</p>
        <p>•  mixed salads</p>
        <p>•  breakfast sandwiches</p>
        <p>•  pastries and other sweets</p>
        <p>•  assorted beverages including fresh coffee and tea</p>
      </div>
      <div class="row">
        <img src="/images/maps/scicafe-map.gif" class="location map">
      </div>
    </div>
    <div class="container-fluid text-center blue-back">
      <div class="row">
        <h2><a class="white-text"  href="http://www.uvic.ca/services/food/where/villagegreens/index.php">Village Greens</a></h2>
        <img src="/images/storefronts/village-greens.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php  ?>
      </div>
      <div class="row writeup">
        <p>Award winning vegetarian and vegan options. Enjoy booth or table seating with a trendy ambience and natural lighting. Choose a table by the window or outdoor patio seating. Located in the Cadboro Commons building.</p>
        <p>•  daily hot meals</p>
        <p>•  homemade soups and chilli</p>
        <p>•  fresh stir fry</p>
        <p>•  fruit, pastries, and other sweets</p>
        <p>•  smoothie bar</p>
        <p>•  assorted beverages including coffee & tea</p>
        <p></p>
        <p>Village Greens is also home to our fabulous Smoothie Bar. Featuring extended hours, weekly and seasonal specials and more.</p>
        <h3><a href="http://www.uvic.ca/services/food/assets/docs/smoothie_bar_options.pdf">Smoothie Menu</a></h3>
        <p>Delicious and nutritious! All smoothies are made with 100% real fruit and are available as vegan or with yogurt. See our smoothie menu board below for a list of our regular flavours.</p>
        <p>Need a healthy boost to fuel your studies or workday? Add green blend, soy or other healthy supplements for just $0.75!</p>
      </div>
      <div class="row">
        <img src="/images/maps/cad+caps+markets-map.gif" class="location map">
      </div>
    </div>
    <div class="container-fluid text-center white-back">
      <div class="row">
        <h2><a class="blue-text" href="http://www.uvic.ca/services/food/where/villagemarket/index.php">Village Market</a></h2>
        <img src="/images/storefronts/village-market.jpg" class="location">
      </div>
      <div id="status" class="row">
        <?php village_market($today, $weekdays, $weekends, $current_time, $open_img, $close_img) ?>
      </div>
      <div class="row writeup">
        <p>Your one-stop campus convenience shop! Provides grab 'n go items as well as packaged foods and ingredients for you to prepare your own culinary creations.</p>
        <p>•  specialty items such as celiac offerings</p>
        <p>•  organic section</p>
        <p>•  fresh produce</p>
        <p>•  bakery and coffee selections</p>
        <p>•  household staples from toothpaste to laundry detergent</p>
      </div>
      <div class="row">
        <img src="/images/maps/cad+caps+markets-map.gif" class="location map">
      </div>
    </div>
  </body>
  <?php ob_end_flush(); ?>
</html>
