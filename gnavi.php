<?php
$url = "https://api.gnavi.co.jp/RestSearchAPI/20150630/?keyid=758c6cf7dfeaf15b08a8c50bb37c02b3&format=xml&freeword=肉&areacode_m=AREAM2105";
$responce = SimpleXMLElement(file_get_contents($url));
var_dump($responce);