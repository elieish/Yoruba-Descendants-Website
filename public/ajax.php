<?php

header('Content-Type: text/plain');
$amount = $_GET['amount'];
$source_currency = $_GET['source_currency'];
$target_currency = $_GET['target_currency'];

$ex_rate = floatval(file_get_contents('http://download.finance.yahoo.com/d/quotes.csv?s='.$source_currency.$target_currency.'=X&f=l1'));
echo round($ex_rate*$amount, 2);
