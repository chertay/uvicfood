<?php
// include "testing.php";
date_default_timezone_set('America/Vancouver');

//variables
$test1= "07:00";
$test2= "07:30";
$test3= "08:00";

$today = date('l');
$getTime = DateTime::createFromFormat('H:i', $test3);
$currentTime = date_format($getTime, 'H:i');

$monToThurs = array("Monday", "Tuesday", "Wednesday", "Thursday");
$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
$weekends = array("Saturday", "Sunday");

$openImg = '<img src="/images/general/open.png" class="status">';
$closeImg = '<img src="/images/general/closed.png" class="status">';

//Arts Place
function arts_place($today, $currentTime, $monToThurs, $openImg, $closeImg){
  $open = "08:00";
  $close = "15:00";
  $friClose = "14:00";

  $getopening= DateTime::createFromFormat('H:i', $open);
  $opening = date_format($getopening, 'H:i A');
  $getclosing= DateTime::createFromFormat('H:i', $close);
  $closing = date_format($getclosing, 'H:i');
  $getfriClosing= DateTime::createFromFormat('H:i', $friClose);
  $friClosing = date_format($getfriClosing, 'H:i');

  if (in_array($today, $monToThurs) && ($currentTime >= $opening) && ($currentTime < $closing)){
    echo $openImg;
  } elseif (($today == "Friday") && ($currentTime >= $opening) && ($currentTime < $friClosing)){
    echo $openImg;
  } else {
    echo $closeImg;
  }
}

function arts_place_notifications($today, $currentTime, $monToThurs){
  $open = "08:00";
  $close = "15:00";
  $friClose = "14:00";

  $getOpening = DateTime::createFromFormat('H:i', $open);
  $opening = date_format($getOpening, 'H:i');
  $getClosing = DateTime::createFromFormat('H:i', $close);
  $closing = date_format($getClosing, 'H:i');
  $getFriClosing = DateTime::createFromFormat('H:i', $friClose);
  $friClosing = date_format($getFriClosing, 'H:i');

  // $openSoon = date("H:i A", strtotime("$open-30min"));
  // $open->sub(new DateInterval("PT30i"));
  $openSoon = date_format($getOpening->sub(new DateInterval("PT30M")), 'H:i');
  $closeSoon = date("H:i A", strtotime("$close-30min"));
  $friCloseSoon = date("H:i A", strtotime("$friClose-30min"));

  $getOpenDisplay = DateTime::createFromFormat('H:i', $open);
  $openDisplay = date_format($getOpenDisplay, 'g:i');
  $getCloseDisplay = DateTime::createFromFormat('H:i', $close);
  $closeDisplay = date_format($getCloseDisplay, 'g:i');
  $getFriCloseDisplay = DateTime::createFromFormat('H:i', $friClose);
  $friCloseDisplahy = date_format($getFriCloseDisplay, 'g:i');

  if (((in_array($today, $monToThurs) || ($today == "Friday")) && ($currentTime >= $openSoon) && ($currentTime < $opening))){
    echo "<h2 class='notify-opening'> Opening at " . $openDisplay;
  } elseif ((in_array($today, $monToThurs) && ($currentTime >= $closeSoon) && ($currentTime < $closing))){
    echo "<h2 class='notify-closing'> Closing at " . $closeDisplay;
  } elseif (($today == "Friday") && ($currentTime >= $friCloseSoon) && ($currentTime < $fri_closing)){
    echo "<h2 class='notify-closing'> Closing at ". $fri_closeDisplay .'</h2>';
  }
}
?>
