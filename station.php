<?php
$word = $_GET['area'];
$url = "https://api.ekispert.jp/v1/xml/geo/station?key=eBBWPyXMYduCN759&geoPoint=35.6729,139.768962,500";
$hoge = file_get_contents($url);
$responce = new SimpleXMLElement(file_get_contents($url));
echo json_encode($responce->Point->Station->Name);