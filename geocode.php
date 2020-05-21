<?php
$apiKey = "nZnDXQlqhjVgX98BbCzmbgQYLilxxacjmwBsbf-0sNI";
$geoLocation = "12 Evenlode road, bourne end";
$url = "https://geocode.search.hereapi.com/v1/geocode?q=$geoLocation&apiKey=$apiKey";
$urlContents = file_get_contents($url);

echo($urlContents);
?>