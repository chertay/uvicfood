<?php
include 'testing.php';

date_default_timezone_set('America/Vancouver');

//variables
// $today = date('l');
// $current_time = date("H:i A");
$mon_to_thurs = array("Monday", "Tuesday", "Wednesday", "Thursday");
$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
$weekends = array("Saturday", "Sunday");
$open_img = '<img src="/images/general/open.png" class="status">';
$close_img = '<img src="/images/general/closed.png" class="status">';

//Arts Place
function arts_place($today, $current_time, $mon_to_thurs, $open_img, $close_img){
  $open = date("H:i A", strtotime("8:00"));
  $close = date("H:i A", strtotime("15:00"));
  $fri_close = date("H:i A", strtotime("14:00"));

  if (in_array($today, $mon_to_thurs) && ($current_time >= $open) && ($current_time <= $close)){
    echo $open_img;
  } elseif (($today == "Friday") && ($current_time >= $open) && ($current_time <= $fri_close)){
    echo $open_img;
  } else {
    echo $close_img;
  }
}

//Bibliocafe
function bibliocafe($today, $current_time, $mon_to_thurs, $open_img, $close_img){
  $open = date("H:i A", strtotime("8:00"));
  $close = date("H:i A", strtotime("21:00"));
  $fri_close = date("H:i A", strtotime("16:00"));
  $weekend_open = date("H:i A", strtotime("10:00"));
  $sat_close = date("H:i A", strtotime("16:00"));
  $sun_close = date("H:i A", strtotime("21:00"));

  if (in_array($today, $mon_to_thurs) && ($current_time >= $open) && ($current_time <= $close)){
    echo $open_img;
  } elseif (($today == "Friday") && ($current_time >= $open) && ($current_time <= $fri_close)){
    echo $open_img;
  } elseif (($today == "Saturday") && ($current_time >= $weekend_open) && ($current_time <= $sat_close)){
    echo $open_img;
  } elseif (($today == "Sunday") && ($current_time >= $weekend_open) && ($current_time <= $sun_close)){
    echo $open_img;
  } else {
    echo $close_img;
  }
}

// Cadboro Commons
function cadboro_commons($today, $current_time, $open_img, $close_img){
  $open = date("H:i A", strtotime("7:30"));
  $close = date("H:i A", strtotime("19:30"));

  if (($current_time >= $open) && ($current_time <= $close)){
    echo $open_img;
  } else {
    echo $close_img;
  }
}

// Caps Bistro
function caps_bistro($today, $weekdays, $weekends, $current_time, $open_img, $close_img){
  $open = date("H:i A", strtotime("11:00"));
  $close = date("H:i A", strtotime("23:30"));
  $weekend_open = date("H:i A", strtotime("11:30"));

    if (in_array($today, $weekdays) && ($current_time >= $open) && ($current_time <= $close)) {
      echo $open_img;
    } elseif (in_array($today, $weekends) && ($current_time >= $weekend_open) && ($current_time <= $close)) {
      echo $open_img;
    } else {
      echo $close_img;
    }
}

// Court Cafe
function court_cafe($today, $weekdays, $current_time, $open_img, $close_img){
  $open = date("H:i A", strtotime("8:00"));
  $close = date("H:i A", strtotime("15:00"));

    if (in_array($today, $weekdays) && ($current_time >= $open) && ($current_time <= $close)){
      echo $open_img;
    } else {
      echo $close_img;
    }
}

// Halftime
function halftime($today, $weekdays, $current_time, $open_img, $close_img){
  $open = date("H:i A", strtotime("9:00"));
  $close = date("H:i A", strtotime("16:00"));

  if (in_array($today, $weekdays) && ($current_time >= $open) && ($current_time <= $close)){
    echo $open_img;
  } else {
    echo $close_img;
  }
}

// Macs
function macs($today, $mon_to_thurs, $current_time, $open_img, $close_img){
  $open = date("H:i A", strtotime("8:00"));
  $close = date("H:i A", strtotime("16:00"));
  $fri_close = date("H:i A", strtotime("15:00"));

  if (in_array($today, $mon_to_thurs) && ($current_time >= $open) && ($current_time <= $close)){
    echo $open_img;
  } elseif (($today == "Friday") && ($current_time >= $open) && ($current_time <= $fri_close)){
    echo $open_img;
  } else {
    echo $close_img;
  }
}

// Mystic Market
function mystic_market($today, $mon_to_thurs, $weekends, $current_time, $open_img, $close_img){
  $open = date("H:i A", strtotime("8:00"));
  $weekend_open = date("H:i A", strtotime("9:00"));
  $close = date("H:i A", strtotime("19:00"));
  $early_close = date("H:i A", strtotime("15:00"));

    if (in_array($today, $mon_to_thurs) && ($current_time >= $open) && ($current_time <= $close)){
      echo $open_img;
    } elseif (($today == "Friday") && ($current_time >= $open) && ($current_time <= $early_close)){
      echo $open_img;
    } elseif (in_array($today, $weekends) && ($current_time >= $weekend_open) && ($current_time <= $early_close)){
      echo $open_img;
    } else {
      echo $close_img;
    }
}

// Nibbles and Bytes
function nibbles_and_bytes($today, $weekdays, $current_time, $open_img, $close_img){
  $open = date("H:i A", strtotime("8:00"));
  $close = date("H:i A", strtotime("15:00"));

    if (in_array($today, $weekdays) && ($current_time >= $open) && ($current_time <= $close)){
      echo $open_img;
    } else {
      echo $close_img;
    }
}

// SciCafe
function scicafe($today, $weekdays, $current_time, $open_img, $close_img){
  $open = date("H:i A", strtotime("8:00"));
  $close = date("H:i A", strtotime("15:00"));

    if (in_array($today, $weekdays) && ($current_time >= $open) && ($current_time <= $close)){
      echo $open_img;
    } else {
      echo $close_img;
    }
}

// Village Greens
function village_greens($today, $weekdays, $mon_to_thurs, $current_time, $open_img, $close_img){
  $open = date("H:i A", strtotime("11:00"));
  $close = date("H:i A", strtotime("14:30"));
  $late_open = date("H:i A", strtotime("16:30"));
  $late_close = date("H:i A", strtotime("19:30"));

    if (in_array($today, $weekdays) && ($current_time >= $open) && ($current_time <= $close)){
      echo $open_img;
    } elseif (((in_array($today, $mon_to_thurs) || ($today == "Sunday")) && ($current_time >= $late_open) && ($current_time <= $late_close))){
      echo $open_img;
    } else {
      echo $close_img;
    }
}

// Village Greens - Smoothie Bar
function smoothie_bar($today, $weekdays, $mon_to_thurs, $current_time){
  $open = date("H:i A", strtotime("11:00"));
  $close = date("H:i A", strtotime("14:30"));
  $late_open = date("H:i A", strtotime("16:30"));
  $late_close = date("H:i A", strtotime("19:30"));
  $open_img_sm = '<img src="/images/general/open.png" class="status_sm">';
  $close_img_sm = '<img src="/images/general/closed.png" class="status_sm">';

    if (in_array($today, $weekdays) && ($current_time >= $open) && ($current_time <= $close)){
      echo $open_img_sm;
    } elseif (((in_array($today, $mon_to_thurs) || ($today == "Sunday")) && ($current_time >= $late_open) && ($current_time <= $late_close))){
      echo $open_img_sm;
    } else {
      echo $close_img_sm;
    }
}

// Village Market
function village_market($today, $weekdays, $weekends, $current_time, $open_img, $close_img){
  $open = date("H:i A", strtotime("11:00"));
  $close = date("H:i A", strtotime("23:30"));
  $weekend_open = date("H:i A", strtotime("11:30"));

    if (in_array($today, $weekdays) && ($current_time >= $open) && ($current_time <= $close)){
      echo $open_img;
    } elseif (in_array($today, $weekends) && ($current_time >= $weekend_open) && ($current_time <= $close)){
      echo $open_img;
    } else {
      echo $close_img;
    }
}

?>
