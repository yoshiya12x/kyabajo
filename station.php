<?php
$latitude = $_GET['latitude'];
$longitude = $_GET['longitude'];

$url = "https://api.ekispert.jp/v1/xml/geo/station?key=eBBWPyXMYduCN759&geoPoint=$latitude,$longitude,500";
$responce = new SimpleXMLElement(file_get_contents($url));

echo json_encode($responce->Point->Station->Name, JSON_UNESCAPED_UNICODE);