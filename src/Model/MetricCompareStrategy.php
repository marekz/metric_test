<?php

namespace SBG\App\Model;

use SBG\App\Model\MetricCompareStrategyInterface;

class MetricCompareStrategy implements MetricCompareStrategyInterface {

    private $strategy;
    
    public function __construct($cmpStrategy) {
        $this->strategy = $cmpStrategy;
    }
    
    /**
     * @param string $cmpStrategy
     * @return string
     */
    public function compareStrategy() {
        return $this->strategy;
    }
}
