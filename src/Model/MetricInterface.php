<?php

namespace SBG\App\Model;

use SBG\App\Entity\Metrics;

interface MetricInterface {
// 1   download current data from source
// 2   save current date from source to database
    
    public function resultCompare($metric, $cmpStrategy);
}
