<?php

use SBG\App\Model\Metric;
use SBG\App\Model\MetricCompareStrategy;

require_once './vendor/autoload.php';

$strategy = new MetricCompareStrategy('int');

$metric = new Metric();
$test = $metric->resultCompare(1, $strategy);
printf($test->compareStrategy());