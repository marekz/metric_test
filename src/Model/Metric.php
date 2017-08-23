<?php

namespace SBG\App\Model;

use SBG\App\Model\Interfaces\MetricInterface;
use SBG\App\Model\MetricCompareStrategy;

class Metric implements MetricInterface {
    public function resultCompare($metric, MetricCompareStrategy $cmpStrategy) {
        return $cmpStrategy;
    }
}