<?php
// include "testing.php";
date_default_timezone_set('America/Vancouver');
//variables
$today = date('l');
$current_time = date("H:i A");

$mon_to_thurs = array("Monday", "Tuesday", "Wednesday", "Thursday");
$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
$weekends = array("Saturday", "Sunday");

$open_img = '<img src="/images/general/open.png" class="status">';
$close_img = '<img src="/images/general/closed.png" class="status">';

//Arts Place
function arts_place($today, $current_time, $mon_to_thurs, $open_img, $close_img){
  $open = "8:00";
  $close = "15:00";
  $fri_close = "14:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $fri_closing = date("H:i A", strtotime($fri_close));

  $main_warning = date("H:i A", strtotime("$close-30min"));
  $fri_warning = date("H:i A", strtotime("$fri_close-30min"));

  $close_display = date("g:i A", strtotime($close));
  $fri_close_display =date("g:i A", strtotime($fri_close));

  if (in_array($today, $mon_to_thurs) && ($current_time >= $opening) && ($current_time <= $closing)){
    echo $open_img;
    if (($current_time >= $main_warning) && ($current_time <= $closing)){
      echo "<p class= 'warning'> Closing at: " . $close_display;
    }
  } elseif (($today == "Friday") && ($current_time >= $opening) && ($current_time <= $fri_closing)){
    echo $open_img;
    if (($current_time >= $fri_warning) && ($current_time <= $fri_closing)){
      echo "<p class= 'warning'> Closing at: " . $fri_close_display;
    }
  } else {
    echo $close_img;
  }
}

//Bibliocafe
function bibliocafe($today, $current_time, $mon_to_thurs, $open_img, $close_img){
  $open = "8:00";
  $close = "21:00";
  $weekend_open = "10:00";
  $fri_sat_close = "16:00";

  $opening = date("H:i A", strtotime($open));
  $weekend_opening = date("H:i A", strtotime($weekend_open));
  $closing = date("H:i A", strtotime($close));
  $fri_sat_closing = date("H:i A", strtotime($fri_sat_close));

  $main_warning = date("H:i A", strtotime("$close-30min"));
  $fri_sat_warning = date("H:i A", strtotime("$fri_sat_close-30min"));

  $close_display = date("g:i A", strtotime($close));
  $fri_close_display =date("g:i A", strtotime($fri_sat_close));

  if (in_array($today, $mon_to_thurs) && ($current_time >= $opening) && ($current_time <= $closing)){
    echo $open_img;
    if (($current_time >= $main_warning) && ($current_time <= $closing)){
      echo "<p class= 'warning'> Closing at: " . $close_display;
    }
  } elseif (($today == "Friday") && ($current_time >= $opening) && ($current_time <= $fri_sat_closing)){
    echo $open_img;
    if (($current_time >= $fri_sat_warning) && ($current_time <= $fri_sat_closing)){
      echo "<p class= 'warning'> Closing at: " . $fri_sat_close_display;
    }
  } elseif (($today == "Saturday") && ($current_time >= $weekend_opening) && ($current_time <= $fri_sat_closing)){
    echo $open_img;
    if (($current_time >= $fri_sat_warning) && ($current_time <= $fri_sat_closing)){
      echo "<p class= 'warning'> Closing at: " . $fri_sat_close_display;
    }
  } elseif (($today == "Sunday") && ($current_time >= $weekend_opening) && ($current_time <= $closing)){
    echo $open_img;
    if (($current_time >= $main_warning) && ($current_time <= $closing)){
      echo "<p class= 'warning'> Closing at: " . $close_display;
    }
  } else {
    echo $close_img;
  }
}

// Cadboro Commons
function cadboro_commons($today, $current_time, $open_img, $close_img){
  $open = "7:30";
  $close = "19:30";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  $warning = date("H:i A", strtotime("$close-30min"));

  $close_display = date("g:i A", strtotime($close));

  if (($current_time >= $opening) && ($current_time <= $closing)){
    echo $open_img;
    if (($current_time >= $warning) && ($current_time <= $closing)){
      echo "<p class= 'warning'> Closing at: " . $close_display;
    }
  } else {
    echo $close_img;
  }
}

// Caps Bistro
function caps_bistro($today, $weekdays, $weekends, $current_time, $open_img, $close_img){
  $open = "11:00";
  $weekend_open = "11:30";
  $close = "23:30";

  $opening = date("H:i A", strtotime($open));
  $weekend_opening = date("H:i A", strtotime($weekend_open));
  $closing = date("H:i A", strtotime($close));

  $warning = date("H:i A", strtotime("$close-30min"));

  $close_display = date("g:i A", strtotime($close));

    if (in_array($today, $weekdays) && ($current_time >= $opening) && ($current_time <= $closing)) {
      echo $open_img;
      if (($current_time >= $warning) && ($current_time <= $closing)){
        echo "<p class= 'warning'> Closing at: " . $close_display;
      }
    } elseif (in_array($today, $weekends) && ($current_time >= $weekend_opening) && ($current_time <= $closing)) {
      echo $open_img;
      if (($current_time >= $warning) && ($current_time <= $closing)){
        echo "<p class= 'warning'> Closing at: " . $close_display;
      }
    } else {
      echo $close_img;
    }
}

// Court Cafe
function court_cafe($today, $weekdays, $current_time, $open_img, $close_img){
  $open = "8:00";
  $close = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  $warning = date("H:i A", strtotime("$close-30min"));

  $close_display = date("g:i A", strtotime($close));

    if (in_array($today, $weekdays) && ($current_time >= $opening) && ($current_time <= $closing)){
      echo $open_img;
      if (($current_time >= $warning) && ($current_time <= $closing)){
        echo "<p class= 'warning'> Closing at: " . $close_display;
      }
    } else {
      echo $close_img;
    }
}

// Halftime
function halftime($today, $weekdays, $current_time, $open_img, $close_img){
  $open = "9:00";
  $close = "16:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  $warning = date("H:i A", strtotime("$close-30min"));

  $close_display = date("g:i A", strtotime($close));

  if (in_array($today, $weekdays) && ($current_time >= $opening) && ($current_time <= $closing)){
    echo $open_img;
    if (($current_time >= $warning) && ($current_time <= $closing)){
      echo "<p class= 'warning'> Closing at: " . $close_display;
    }
  } else {
    echo $close_img;
  }
}

// Macs
function macs($today, $mon_to_thurs, $current_time, $open_img, $close_img){
  $open = "8:00";
  $close = "16:00";
  $fri_close = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $fri_closing = date("H:i A", strtotime($fri_close));

  $main_warning = date("H:i A", strtotime("$close-30min"));
  $fri_warning = date("H:i A", strtotime("$fri_close-30min"));

  $close_display = date("g:i A", strtotime($close));
  $fri_close_display =date("g:i A", strtotime($fri_close));

  if (in_array($today, $mon_to_thurs) && ($current_time >= $opening) && ($current_time <= $closing)){
    echo $open_img;
    if (($current_time >= $main_warning) && ($current_time <= $closing)){
      echo "<p class= 'warning'> Closing at: " . $close_display;
    }
  } elseif (($today == "Friday") && ($current_time >= $opening) && ($current_time <= $fri_closing)){
    echo $open_img;
    if (($current_time >= $fri_warning) && ($current_time <= $fri_closing)){
      echo "<p class= 'warning'> Closing at: " . $fri_close_display;
    }
  } else {
    echo $close_img;
  }
}

// Mystic Market
function mystic_market($today, $mon_to_thurs, $weekends, $current_time, $open_img, $close_img){
  $open = "8:00";
  $weekend_open = "9:00";
  $close = "16:00";
  $early_close = "15:00";

  $opening = date("H:i A", strtotime($open));
  $weekend_opening = date("H:i A", strtotime($weekend_open));
  $closing = date("H:i A", strtotime($close));
  $early_closing = date("H:i A", strtotime($early_close));

  $main_warning = date("H:i A", strtotime("$close-30min"));
  $early_warning = date("H:i A", strtotime("$early_close-30min"));

  $close_display = date("g:i A", strtotime($close));
  $early_close_display =date("g:i A", strtotime($early_close));

    if (in_array($today, $mon_to_thurs) && ($current_time >= $opening) && ($current_time <= $closing)){
      echo $open_img;
      if (($current_time >= $main_warning) && ($current_time <= $closing)){
        echo "<p class= 'warning'> Closing at: " . $close_display;
      }
    } elseif (($today == "Friday") && ($current_time >= $opening) && ($current_time <= $early_closing)){
      echo $open_img;
      if (($current_time >= $early_warning) && ($current_time <= $early_closing)){
        echo "<p class= 'warning'> Closing at: " . $early_close_display;
      }
    } elseif (in_array($today, $weekends) && ($current_time >= $weekend_opening) && ($current_time <= $early_closing)){
      echo $open_img;
      if (($current_time >= $early_warning) && ($current_time <= $early_closing)){
        echo "<p class= 'warning'> Closing at: " . $early_close_display;
      }
    } else {
      echo $close_img;
    }
}

// Nibbles and Bytes
function nibbles_and_bytes($today, $weekdays, $current_time, $open_img, $close_img){
  $open = "8:00";
  $close = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  $warning = date("H:i A", strtotime("$close-30min"));

  $close_display = date("g:i A", strtotime($close));

    if (in_array($today, $weekdays) && ($current_time >= $opening) && ($current_time <= $closing)){
      echo $open_img;
      if (($current_time >= $warning) && ($current_time <= $closing)){
        echo "<p class= 'warning'> Closing at: " . $close_display;
      }
    } else {
      echo $close_img;
    }
}
// SciCafe
function scicafe($today, $weekdays, $current_time, $open_img, $close_img){
  $open = "8:00";
  $close = "15:00";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));

  $warning = date("H:i A", strtotime("$close-30min"));

  $close_display = date("g:i A", strtotime($close));

    if (in_array($today, $weekdays) && ($current_time >= $opening) && ($current_time <= $closing)){
      echo $open_img;
      if (($current_time >= $warning) && ($current_time <= $closing)){
        echo "<p class= 'warning'> Closing at: " . $close_display;
      }
    } else {
      echo $close_img;
    }
}
// Village Greens
function village_greens($today, $weekdays, $mon_to_thurs, $current_time, $open_img, $close_img){
  $open = "11:00";
  $close = "14:30";
  $late_open = "16:30";
  $late_close = "19:30";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $late_opening = date("H:i A", strtotime($late_open));
  $late_closing = date("H:i A", strtotime($late_close));

  $warning = date("H:i A", strtotime("$close-30min"));
  $late_warning = date("H:i A", strtotime("$late_close-30min"));

  $close_display = date("g:i A", strtotime($close));
  $late_close_display = date("g:i A", strtotime($late_close));

    if (in_array($today, $weekdays) && ($current_time >= $opening) && ($current_time <= $closing)){
      echo $open_img;
      if (($current_time >= $warning) && ($current_time <= $closing)){
        echo "<p class= 'warning'> Closing at: " . $close_display;
      }
    } elseif (((in_array($today, $mon_to_thurs) || ($today == "Sunday")) && ($current_time >= $late_opening) && ($current_time <= $late_closing))){
      echo $open_img;
      if (($current_time >= $late_warning) && ($current_time <= $late_closing)){
        echo "<p class= 'warning'> Closing at: " . $late_close_display;
      }
    } else {
      echo $close_img;
    }
}
// Village Greens - Smoothie Bar
function smoothie_bar($today, $weekdays, $mon_to_thurs, $current_time){
  $open = "11:00";
  $close = "14:30";
  $late_open = "16:30";
  $late_close = "19:30";

  $opening = date("H:i A", strtotime($open));
  $closing = date("H:i A", strtotime($close));
  $late_opening = date("H:i A", strtotime($late_open));
  $late_closing = date("H:i A", strtotime($late_close));

  $warning = date("H:i A", strtotime("$close-30min"));
  $late_warning = date("H:i A", strtotime("$late_close-30min"));

  $close_display = date("g:i A", strtotime($close));
  $late_close_display = date("g:i A", strtotime($late_close));

  $open_img_sm = '<img src="/images/general/open.png" class="status_sm">';
  $close_img_sm = '<img src="/images/general/closed.png" class="status_sm">';

    if (in_array($today, $weekdays) && ($current_time >= $opening) && ($current_time <= $closing)){
      echo $open_img_sm;
      if (($current_time >= $warning) && ($current_time <= $closing)){
        echo "<p class= 'warning'> Closing at: " . $close_display;
      }
    } elseif (((in_array($today, $mon_to_thurs) || ($today == "Sunday")) && ($current_time >= $late_opening) && ($current_time <= $late_closing))){
      echo $open_img_sm;
      if (($current_time >= $late_warning) && ($current_time <= $late_closing)){
        echo "<p class= 'warning'> Closing at: " . $late_close_display;
      }
    } else {
      echo $close_img_sm;
    }

}
// Village Market
function village_market($today, $weekdays, $weekends, $current_time, $open_img, $close_img){
  $open = "11:00";
  $weekend_open = "11:30";
  $close = "23:30";

  $opening = date("H:i A", strtotime($open));
  $weekend_opening = date("H:i A", strtotime($weekend_open));
  $closing = date("H:i A", strtotime($close));

  $warning = date("H:i A", strtotime("$close-30min"));

  $close_display = date("g:i A", strtotime($close));

    if (in_array($today, $weekdays) && ($current_time >= $opening) && ($current_time <= $closing)){
      echo $open_img;
      if (($current_time >= $warning) && ($current_time <= $closing)){
        echo "<p class= 'warning'> Closing at: " . $close_display;
      }
    } elseif (in_array($today, $weekends) && ($current_time >= $weekend_opening) && ($current_time <= $closing)){
      echo $open_img;
      if (($current_time >= $warning) && ($current_time <= $closing)){
        echo "<p class= 'warning'> Closing at: " . $close_display;
      }
    } else {
      echo $close_img;
    }
}
?>
