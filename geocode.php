<?php
$apiKey = "nZnDXQlqhjVgX98BbCzmbgQYLilxxacjmwBsbf-0sNI";
$geoLocation = "12 Evenlode road, bourne end";
$url = "https://geocode.search.hereapi.com/v1/geocode?q=$geoLocation&apiKey=$apiKey";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

curl_exec($ch);
?>