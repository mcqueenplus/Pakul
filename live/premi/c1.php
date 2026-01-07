<?php
// create curl resource 
$ch = curl_init();

 // set url 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, "OTT Navigator");
curl_setopt($ch, CURLOPT_URL, "https://qtv.web.id/PLNEW/?key=9fcac");
curl_setopt($ch, CURLOPT_REFERER, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);


$result = curl_exec($ch);
header('Content-Type: audio/x-mpegurl');
curl_close($ch);

echo $result;
