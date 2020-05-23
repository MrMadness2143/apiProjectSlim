<?php
    $apiKey = "nZnDXQlqhjVgX98BbCzmbgQYLilxxacjmwBsbf-0sNI";
    $geoLocation = "12%20Evenlode%20road,%20bourne%20end";
    $url = "https://geocode.search.hereapi.com/v1/geocode?q=$geoLocation&apiKey=$apiKey";
    $ch = curl_init();
    $useragent = 'php';
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);

    $result=curl_exec($ch);
    echo $result;
    curl_close($ch);
?>