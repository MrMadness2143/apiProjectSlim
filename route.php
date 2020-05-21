<?php

$start = "52.5308,13.3847";
$end = "52.5323,13.3789";
$departTime = "2019-10-02T17:00:00";
$apiKey = "nZnDXQlqhjVgX98BbCzmbgQYLilxxacjmwBsbf-0sNI";
$url = "https://router.hereapi.com/v8/routes?transportMode=car&origin=$start&destination=$end&return=summary&departureTime=$departTime&apiKey=$apiKey";
echo file_get_contents($url);

?>