<?php

$amount = $_GET['amount'];
$source_currency = $_GET['source_currency'];
$target_currency = $_GET['target_currency'];
$url = 'http://finance.yahoo.com/d/quotes.csv?e=.csv&f=sl1d1t1&s='. $source_currency . $target_currency .'=X';
$handle = @fopen($url, 'r');

if ($handle) {
    $result = fgets($handle, 4096);
    fclose($handle);
}
$allData = explode(',',$result); /* Get all the contents to an array */
$value = $allData[1];

echo round($value*$amount, 2);


