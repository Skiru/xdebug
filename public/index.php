<?php

use Skiru\Xdebug\Calculator;

require '../vendor/autoload.php';

$calculator = new Calculator();

$result = $calculator->add(1, 2, 3, 4);

echo $result;
