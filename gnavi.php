<?php
$word = $_GET['food'];
$url = "https://api.gnavi.co.jp/RestSearchAPI/20170630/?keyid=758c6cf7dfeaf15b08a8c50bb37c02b3&format=xml&freeword=$word&areacode_m=AREAM2105&hit_per_page=1";
$responce = new SimpleXMLElement(file_get_contents($url));
echo json_encode($responce->rest->url, JSON_UNESCAPED_UNICODE);
