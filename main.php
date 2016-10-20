<?php
// include "testing.php";
date_default_timezone_set('America/Vancouver');
//general variables
$today = date('l');
$currentTime = date("H:i A");

$monToThurs = array("Monday", "Tuesday", "Wednesday", "Thursday");
$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
$weekends = array("Saturday", "Sunday");

$openImg = '<img src="/images/general/open.png" class="status">';
$closeImg = '<img src="/images/general/closed.png" class="status">';

//Arts Place

// display whether open or closed
function artsPlace($today, $currentTime, $monToThurs, $openImg, $closeImg){
  $open = "8:00";
  $close = "15:00";
  $friClose = "14:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $friClosing = date("H:i A", strtotime($friClose));

  if (in_array($today, $monToThurs) && ($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImg;
  } elseif (($today == "Friday") && ($currentTime >= $opening) && ($currentTime < $friClosing)){
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function artsPlaceNotifications($today, $currentTime, $monToThurs){
  $open = "8:00";
  $close = "15:00";
  $friClose = "14:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $friClosing = date("H:i A", strtotime($friClose));

  $openSoon = date("H:i A", strtotime("$open-30min"));
  $mainCloseSoon = date("H:i A", strtotime("$close-30min"));
  $friCloseSoon = date("H:i A", strtotime("$friClose-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $closeDisplay = date("g:i A", strtotime($close));
  $fricloseDisplay =date("g:i A", strtotime($friClose));

  if (((in_array($today, $monToThurs) || ($today == "Friday")) && ($currentTime >= $openSoon) && ($currentTime < $opening))){
    echo "<h2 class='notify-opening'> Opening at " . $openDisplay;
  } elseif ((in_array($today, $monToThurs) && ($currentTime >= $mainCloseSoon) && ($currentTime < $closing))){
    echo "<h2 class='notify-closing'> Closing at " . $closeDisplay;
  } elseif (($today == "Friday") && ($currentTime >= $friCloseSoon) && ($currentTime < $friClosing)){
    echo "<h2 class='notify-closing'> Closing at ". $fricloseDisplay .'</h2>';
  }
}

//Bibliocafe

// display whether open or closed
function bibliocafe($today, $currentTime, $monToThurs, $weekends, $openImg, $closeImg){
  $open = "8:00";
  $close = "21:00";
  $weekendOpen = "10:00";
  $friSatClose = "16:00";

  $opening = date("H:i A", strtotime($open));
  $weekendOpening = date("H:i A", strtotime($weekendOpen));
  $closing = date("H:i A", strtotime($close));
  $friSatClosing = date("H:i A", strtotime($friSatClose));

  if (in_array($today, $monToThurs) && ($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImg;
  } elseif (($today == "Friday") && ($currentTime >= $opening) && ($currentTime < $friSatClosing)){
    echo $openImg;
  } elseif (($today == "Saturday") && ($currentTime >= $weekendOpening) && ($currentTime < $friSatClosing)){
    echo $openImg;
  } elseif (($today == "Sunday") && ($currentTime >= $weekendOpening) && ($currentTime < $closing)){
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function bibliocafeNotifications($today, $currentTime, $monToThurs, $weekends){
  $open = "8:00";
  $close = "21:00";
  $weekendOpen = "10:00";
  $friSatClose = "16:00";

  $opening = date("H:i A", strtotime($open));
  $weekendOpening = date("H:i A", strtotime($weekendOpen));
  $closing = date("H:i A", strtotime($close));
  $friSatClosing = date("H:i A", strtotime($friSatClose));

  $mainOpenSoon = date("H:i A", strtotime("$open-30min"));
  $mainCloseSoon = date("H:i A", strtotime("$close-30min"));
  $firSatCloseSoon = date("H:i A", strtotime("$friSatClose-30min"));
  $weekendOpenSoon = date("H:i A", strtotime("$weekendOpen-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $weekendOpenDisplay = date("g:i A", strtotime($weekendOpen));
  $closeDisplay = date("g:i A", strtotime($close));
  $friSatCloseDisplay =date("g:i A", strtotime($friSatClose));

  if ((in_array($today, $monToThurs) || ($today == "Friday")) && (($currentTime >= $mainOpenSoon) && ($currentTime < $opening))){
    echo "<h2 class='notify-opening'> Opening at " . $openDisplay . "</h2>";
  } elseif ((in_array($today, $weekends) && (($currentTime >= $weekendOpenSoon) && ($currentTime < $weekendOpening)))){
    echo "<h2 class='notify-opening'> Opening at " . $weekendOpenDisplay . "</h2>";
  } elseif ((in_array($today, $monToThurs) || ($today == "Sunday")) && (($currentTime >= $mainCloseSoon) && ($currentTime < $closing))){
    echo "<h2 class='notify-closing'> Closing at " . $closeDisplay . "</h2>";
  } elseif ((($today == "Friday") || ($today == "Saturday")) && (($currentTime >= $firSatCloseSoon) && ($currentTime < $friSatClosing))){
    echo "<h2 class='notify-closing'> Closing at " . $friSatCloseDisplay . "</h2>";
  }
}

// Cadboro Commons

// display whether open or closed
function cadboroCommons($today, $currentTime, $openImg, $closeImg){
  $open = "7:30";
  $close = "19:30";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  if (($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function cadboroCommonsNotifications($today, $currentTime){
  $open = "7:30";
  $close = "19:30";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  $openSoon = date("H:i A", strtotime("$open-30min"));
  $closeSoon = date("H:i A", strtotime("$close-30min"));

  $openDisplay = date("g:i A", strtotime ($open));
  $closeDisplay = date("g:i A", strtotime($close));

  if (($currentTime >= $openSoon) && ($currentTime < $opening)){
    echo "<h2 class='notify-opening'> Opening at " . $openDisplay . "</h2>";
  } elseif (($currentTime >= $closeSoon) && ($currentTime < $closing)){
    echo "<h2 class= 'warning'> Closing at " . $closeDisplay;
  }
}

// Caps Bistro

// display whether open or closed
function capsBistro($today, $weekdays, $weekends, $currentTime, $openImg, $closeImg){
  $open = "11:00";
  $weekendOpen = "11:30";
  $close = "23:30";

  $opening = date("H:i A", strtotime($open));
  $weekendOpening = date("H:i A", strtotime($weekendOpen));
  $closing = date("H:i A", strtotime($close));

  if (in_array($today, $weekdays) && ($currentTime >= $opening) && ($currentTime < $closing)) {
    echo $openImg;
  } elseif (in_array($today, $weekends) && ($currentTime >= $weekendOpening) && ($currentTime < $closing)) {
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function capsBistroNotifications($today, $weekdays, $weekends, $currentTime){
  $open = "11:00";
  $weekendOpen = "11:30";
  $close = "23:30";

  $opening = date("H:i A", strtotime($open));
  $weekendOpening = date("H:i A", strtotime($weekendOpen));
  $closing = date("H:i A", strtotime($close));

  $openSoon = date("H:i A", strtotime("$open-30min"));
  $weekendOpenSoon = date("H:i A", strtotime("$weekendOpen-30min"));
  $closeSoon = date("H:i A", strtotime("$close-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $weekendOpenDisplay = date("g:i A", strtotime($weekendOpen));
  $closeDisplay = date("g:i A", strtotime($close));

  if (in_array($today, $weekdays) && (($currentTime >= $openSoon) && ($currentTime < $opening))){
    echo "<h2 class='notify-opening'> Opening at " . $openDisplay . "</h2>";
  } elseif (in_array($today, $weekends) && (($currentTime >= $weekendOpenSoon) && ($currentTime < $weekendOpening))){
    echo "<h2 class='notify-opening'> Opening at " . $weekendOpenDisplay . "</h2>";
  } elseif (($currentTime >= $closeSoon) && ($currentTime < $closing)){
    echo "<h2 class='notify-closing'> Closing at " . $closeDisplay;
  }
}

// Court Cafe

// display whether open or closed
function courtCafe($today, $weekdays, $currentTime, $openImg, $closeImg){
  $open = "8:00";
  $close = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  if (in_array($today, $weekdays) && ($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function courtCafeNotifications($today, $weekdays, $currentTime){
  $open = "8:00";
  $close = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  $openSoon = date("H:i A", strtotime("$open-30min"));
  $closeSoon = date("H:i A", strtotime("$close-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $closeDisplay = date("g:i A", strtotime($close));

  if (in_array($today, $weekdays)){
    if (($currentTime >= $openSoon) && ($currentTime < $opening)){
      echo "<h2 class='notify-opening'> Opening at " . $openDisplay . "</h2>";
    } elseif (($currentTime >= $closeSoon) && ($currentTime < $closing)){
      echo "<h2 class='notify-closing'> Closing at " . $closeDisplay . "</h2>";
    }
  }
}

// Halftime

// display whether open or closed
function halftime($today, $weekdays, $currentTime, $openImg, $closeImg){
  $open = "9:00";
  $close = "16:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  if (in_array($today, $weekdays) && ($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function halftimeNotifications($today, $weekdays, $currentTime){
  $open = "9:00";
  $close = "16:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  $openSoon = date("H:i A", strtotime("$open-30min"));
  $closeSoon = date("H:i A", strtotime("$close-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $closeDisplay = date("g:i A", strtotime($close));

  if (in_array($today, $weekdays)){
    if (($currentTime >= $openSoon) && ($currentTime < $opening)){
      echo "<h2 class='notify-opening'> Opening at " . $openDisplay . "</h2>";
    } elseif (($currentTime >= $closeSoon) && ($currentTime < $closing)){
      echo "<h2 class='notify-closing'> Closing at " . $closeDisplay . "</h2>";
    }
  }
}

// Macs

// display whether open or closed
function macs($today, $monToThurs, $currentTime, $openImg, $closeImg){
  $open = "8:00";
  $close = "16:00";
  $friClose = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $friClosing = date("H:i A", strtotime($friClose));

  if (in_array($today, $monToThurs) && ($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImg;
  } elseif (($today == "Friday") && ($currentTime >= $opening) && ($currentTime < $friClosing)){
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function macsNotifications($today, $monToThurs, $currentTime){
  $open = "8:00";
  $close = "16:00";
  $friClose = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $friClosing = date("H:i A", strtotime($friClose));

  $openSoon = date("H:i A", strtotime("$open-30min"));
  $mainCloseSoon = date("H:i A", strtotime("$close-30min"));
  $friCloseSoon = date("H:i A", strtotime("$friClose-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $closeDisplay = date("g:i A", strtotime($close));
  $fricloseDisplay =date("g:i A", strtotime($friClose));

  if (((in_array($today, $monToThurs) || ($today == "Friday")) && ($currentTime >= $openSoon) && ($currentTime < $opening))){
    echo "<h2 class='notify-opening'> Opening at " . $openDisplay;
  } elseif ((in_array($today, $monToThurs) && ($currentTime >= $mainCloseSoon) && ($currentTime < $closing))){
    echo "<h2 class='notify-closing'> Closing at " . $closeDisplay;
  } elseif (($today == "Friday") && ($currentTime >= $friCloseSoon) && ($currentTime < $friClosing)){
    echo "<h2 class='notify-closing'> Closing at ". $fricloseDisplay .'</h2>';
  }
}

// Mystic Market

// display whether open or closed
function mysticMarket($today, $monToThurs, $weekends, $currentTime, $openImg, $closeImg){
  $open = "8:00";
  $lateOpen = "9:00";
  $close = "19:00";
  $earlyClose = "15:00";

  $opening = date("H:i A", strtotime($open));
  $lateOpening = date("H:i A", strtotime($lateOpen));
  $closing = date("H:i A", strtotime($close));
  $earlyClosing = date("H:i A", strtotime($earlyClose));

  if (in_array($today, $monToThurs) && ($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImg;
  } elseif (($today == "Friday") && ($currentTime >= $opening) && ($currentTime < $earlyClosing)){
    echo $openImg;
  } elseif (in_array($today, $weekends) && ($currentTime >= $lateOpening) && ($currentTime < $earlyClosing)){
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function mysticMarketNotifications($today, $monToThurs, $weekends, $currentTime){
  $open = "8:00";
  $lateOpen = "9:00";
  $close = "19:00";
  $earlyClose = "15:00";

  $opening = date("H:i A", strtotime($open));
  $lateOpening = date("H:i A", strtotime($lateOpen));
  $closing = date("H:i A", strtotime($close));
  $earlyClosing = date("H:i A", strtotime($earlyClose));

  $mainOpenSoon = date("H:i A", strtotime("$open-30min"));
  $lateOpenSoon = date("H:i A", strtotime("$lateOpen-30min"));
  $mainCloseSoon = date("H:i A", strtotime("$close-30min"));
  $earlyCloseSoon = date("H:i A", strtotime("$earlyClose-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $lateOpenDisplay = date("g:i A", strtotime($lateOpen));
  $closeDisplay = date("g:i A", strtotime($close));
  $earlyCloseDisplay =date("g:i A", strtotime($earlyClose));

  if (((in_array($today, $monToThurs) || ($today == "Friday")) && ($currentTime >= $mainOpenSoon) && ($currentTime < $opening))){
    echo "<h2 class='notify-opening'> Opening at " . $openDisplay;
  } elseif ((in_array($today, $weekends) && ($currentTime >= $lateOpenSoon) && ($currentTime < $lateOpening))){
    echo "<h2 class='notify-opening'> Opening at " . $lateOpenDisplay;
  } elseif ((in_array($today, $monToThurs) && ($currentTime >= $mainCloseSoon) && ($currentTime < $closing))){
    echo "<h2 class='notify-closing'> Closing at " . $closeDisplay;
  } elseif (((in_array($today, $weekends) || ($today == "Friday")) && ($currentTime >= $earlyCloseSoon) && ($currentTime < $earlyClosing))){
    echo "<h2 class='notify-closing'> Closing at ". $earlyCloseDisplay .'</h2>';
  }
}

// Nibbles and Bytes

// display whether open or closed
function nibbles($today, $weekdays, $currentTime, $openImg, $closeImg){
  $open = "8:00";
  $close = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  if (in_array($today, $weekdays) && ($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function nibblesNotifications($today, $weekdays, $currentTime){
  $open = "8:00";
  $close = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  $openSoon = date("H:i A", strtotime("$open-30min"));
  $closeSoon = date("H:i A", strtotime("$close-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $closeDisplay = date("g:i A", strtotime($close));

  if (in_array($today, $weekdays)){
    if (($currentTime >= $openSoon) && ($currentTime < $opening)){
      echo "<h2 class='notify-opening'> Opening at " . $openDisplay . "</h2>";
    } elseif (($currentTime >= $closeSoon) && ($currentTime < $closing)){
      echo "<h2 class='notify-closing'> Closing at " . $closeDisplay . "</h2>";
    }
  }
}

// SciCafe

// display whether open or closed
function scicafe($today, $weekdays, $currentTime, $openImg, $closeImg){
  $open = "8:00";
  $close = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  if (in_array($today, $weekdays) && ($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function scicafeNotifications($today, $weekdays, $currentTime){
  $open = "8:00";
  $close = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  $openSoon = date("H:i A", strtotime("$open-30min"));
  $closeSoon = date("H:i A", strtotime("$close-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $closeDisplay = date("g:i A", strtotime($close));

  if (in_array($today, $weekdays)){
    if (($currentTime >= $openSoon) && ($currentTime < $opening)){
      echo "<h2 class='notify-opening'> Opening at " . $openDisplay . "</h2>";
    } elseif (($currentTime >= $closeSoon) && ($currentTime < $closing)){
      echo "<h2 class='notify-closing'> Closing at " . $closeDisplay . "</h2>";
    }
  }
}

// Village Greens

// display whether open or closed
function villageGreens($today, $weekdays, $monToThurs, $currentTime, $openImg, $closeImg){
  $open = "11:00";
  $close = "14:30";
  $lateOpen = "16:30";
  $lateClose = "19:30";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $lateOpening = date("H:i A", strtotime($lateOpen));
  $lateClosing = date("H:i A", strtotime($lateClose));

  if (in_array($today, $weekdays) && ($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImg;
  } elseif (((in_array($today, $monToThurs) || ($today == "Sunday")) && ($currentTime >= $lateOpening) && ($currentTime < $lateClosing))){
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function villageGreensNotifications($today, $weekdays, $monToThurs, $currentTime){
  $open = "11:00";
  $close = "14:30";
  $lateOpen = "16:30";
  $lateClose = "19:30";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $lateOpening = date("H:i A", strtotime($lateOpen));
  $lateClosing = date("H:i A", strtotime($lateClose));

  $openSoon = date("H:i A", strtotime("$open-30min"));
  $lateOpenSoon = date("H:i A", strtotime("$lateOpen-30min"));
  $closeSoon = date("H:i A", strtotime("$close-30min"));
  $lateCloseSoon = date("H:i A", strtotime("$lateClose-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $lateOpenDisplay = date("g:i A", strtotime($lateOpen));
  $closeDisplay = date("g:i A", strtotime($close));
  $lateCloseDisplay = date("g:i A", strtotime($lateClose));

  if (in_array($today, $weekdays) && (($currentTime >= $openSoon) && ($currentTime < $opening))){
    echo "<h2 class='notify-opening'> Opening at " . $openDisplay . "</h2>";
  } elseif (in_array($today, $weekdays) && (($currentTime >= $closeSoon) && ($currentTime < $closing))){
    echo "<h2 class='notify-closing'> Closing at " . $closeDisplay . "</h2>";
  } elseif ((in_array($today, $monToThurs) || ($today == "Sunday")) && (($currentTime >= $lateOpenSoon) && ($currentTime < $lateOpening))){
    echo "<h2 class='notify-opening'> Opening at " .$lateOpenDisplay . "</h2>";
  } elseif ((in_array($today, $monToThurs) || ($today == "Sunday")) && (($currentTime >= $lateCloseSoon) && ($currentTime < $lateClosing))){
      echo "<h2 class='notify-closing'> Closing at " . $lateCloseDisplay . "</h2>";
  }
}

// Village Greens - Smoothie Bar

// display whether open or closed
function smoothieBar($today, $weekdays, $monToThurs, $currentTime){
  $open = "11:00";
  $close = "14:30";
  $lateOpen = "16:30";
  $lateClose = "19:30";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $lateOpening = date("H:i A", strtotime($lateOpen));
  $lateClosing = date("H:i A", strtotime($lateClose));

  $openImgSm = '<img src="/images/general/open.png" class="status_sm">';
  $closeImgSm = '<img src="/images/general/closed.png" class="status_sm">';

  if (in_array($today, $weekdays) && ($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImgSm;
  } elseif (((in_array($today, $monToThurs) || ($today == "Sunday")) && ($currentTime >= $lateOpening) && ($currentTime < $lateClosing))){
    echo $openImgSm;
  } else {
    echo $closeImgSm;
  }
}

// display opening or closing time  if opening or closing within 30min
function smoothieBarNotifications($today, $weekdays, $monToThurs, $currentTime){
  $open = "11:00";
  $close = "14:30";
  $lateOpen = "16:30";
  $lateClose = "19:30";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $lateOpening = date("H:i A", strtotime($lateOpen));
  $lateClosing = date("H:i A", strtotime($lateClose));

  $openSoon = date("H:i A", strtotime("$open-30min"));
  $lateOpenSoon = date("H:i A", strtotime("$lateOpen-30min"));
  $closeSoon = date("H:i A", strtotime("$close-30min"));
  $lateCloseSoon = date("H:i A", strtotime("$lateClose-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $lateOpenDisplay = date("g:i A", strtotime($lateOpen));
  $closeDisplay = date("g:i A", strtotime($close));
  $lateCloseDisplay = date("g:i A", strtotime($lateClose));

  if (in_array($today, $weekdays) && (($currentTime >= $openSoon) && ($currentTime < $opening))){
    echo "<h2 class='notify-opening'> Opening at " . $openDisplay . "</h2>";
  } elseif (in_array($today, $weekdays) && (($currentTime >= $closeSoon) && ($currentTime < $closing))){
    echo "<h2 class='notify-closing'> Closing at " . $closeDisplay . "</h2>";
  } elseif ((in_array($today, $monToThurs) || ($today == "Sunday")) && (($currentTime >= $lateOpenSoon) && ($currentTime < $lateOpening))){
    echo "<h2 class='notify-opening'> Opening at " .$lateOpenDisplay . "</h2>";
  } elseif ((in_array($today, $monToThurs) || ($today == "Sunday")) && (($currentTime >= $lateCloseSoon) && ($currentTime < $lateClosing))){
      echo "<h2 class='notify-closing'> Closing at " . $lateCloseDisplay . "</h2>";
  }
}

// Village Market

// display whether open or closed
function villageMarket($today, $weekdays, $weekends, $currentTime, $openImg, $closeImg){
  $open = "11:00";
  $weekendOpen = "11:30";
  $close = "23:30";

  $opening = date("H:i A", strtotime($open));
  $weekendOpening = date("H:i A", strtotime($weekendOpen));
  $closing = date("H:i A", strtotime($close));

  if (in_array($today, $weekdays) && ($currentTime >= $opening) && ($currentTime < $closing)) {
    echo $openImg;
  } elseif (in_array($today, $weekends) && ($currentTime >= $weekendOpening) && ($currentTime < $closing)) {
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

// display opening or closing time  if opening or closing within 30min
function villageMarketNotifications($today, $weekdays, $weekends, $currentTime){
  $open = "11:00";
  $weekendOpen = "11:30";
  $close = "23:30";

  $opening = date("H:i A", strtotime($open));
  $weekendOpening = date("H:i A", strtotime($weekendOpen));
  $closing = date("H:i A", strtotime($close));

  $openSoon = date("H:i A", strtotime("$open-30min"));
  $weekendOpenSoon = date("H:i A", strtotime("$weekendOpen-30min"));
  $closeSoon = date("H:i A", strtotime("$close-30min"));

  $openDisplay = date("g:i A", strtotime($open));
  $weekendOpenDisplay = date("g:i A", strtotime($weekendOpen));
  $closeDisplay = date("g:i A", strtotime($close));

  if (in_array($today, $weekdays) && (($currentTime >= $openSoon) && ($currentTime < $opening))){
    echo "<h2 class='notify-opening'> Opening at " . $openDisplay . "</h2>";
  } elseif (in_array($today, $weekends) && (($currentTime >= $weekendOpenSoon) && ($currentTime < $weekendOpening))){
    echo "<h2 class='notify-opening'> Opening at " . $weekendOpenDisplay . "</h2>";
  } elseif (($currentTime >= $closeSoon) && ($currentTime < $closing)){
    echo "<h2 class='notify-closing'> Closing at " . $closeDisplay;
  }
}
?>
