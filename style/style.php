<?php
header("Content-type: text/css; charset: UTF-8");
$primary_color = "#0B5995";
$standard_radius = "25%";
?>

h1 {
  color: #ffffff !important;
  border: double;
  border-radius: <?php echo $standard_radius; ?>;
  background-color: <?php echo $primary_color; ?>;
  padding: 15px;
}

.container {
  padding: 40px;
}

h3.cadboro {
  font-size:22px;
}

.timenow {
  font-family: "Impact", sans-serif;
  color: <?php echo $primary_color; ?>;
}

img {
  border-radius: <?php echo $standard_radius; ?>;
}

img.location {
  width: 250px;
  height: 200px;
  border: solid <?php echo $primary_color; ?>;
  position: relative;
}

img.map {
  margin-top: 55px;
}

img.status {
  border: solid <?php echo $primary_color; ?>;
}

img.status_sm {
  width:100px;
  border: solid <?php echo $primary_color; ?>;
}

ul.horizontal_list li{
  list-style: none;
  margin: 10px;
  display: inline-block;
  float: left;
}

hr.header {
  padding: 0px;
  margin: 0px;
}

hr.third {
  margin-right: 0;
  width: 90%;
}

.writeup {
  padding-top: 30px;
}

.warning {
  width: 1150px;
  text-align: center;
  font-size: 30px;
  font-family: "Impact", sans-serif;
  background-color: orange;
  border: solid <?php echo $primary_color; ?>;
  border-radius: <?php echo $standard_radius; ?>;
}
