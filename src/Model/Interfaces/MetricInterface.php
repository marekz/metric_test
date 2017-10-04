<?php

namespace SBG\App\Model\Interfaces;

use SBG\App\Model\MetricCompareStrategy;

interface MetricInterface {
// 1   download current data from source
// 2   save current date from source to database
    
//    public function resultCompare($metric, MetricCompareStrategy $cmpStrategy);
    
    public function getCompareResult();
    
    public function presentMetricStatus();
}
