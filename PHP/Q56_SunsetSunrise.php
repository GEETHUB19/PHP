<?php
date_default_timezone_set('Asia/Kolkata'); // Set timezone to IST

$latitude = 28.6139;  // New Delhi Latitude
$longitude = 77.2090; // New Delhi Longitude

$sunInfo = date_sun_info(time(), $latitude, $longitude);

$sunrise = date("H:i:s", $sunInfo['sunrise']);
$sunset = date("H:i:s", $sunInfo['sunset']);

echo "Sunrise in New Delhi: $sunrise<br>";
echo "Sunset in New Delhi: $sunset<br>";
echo "This code is executed by Geetika";
?>
