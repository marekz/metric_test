<?php

namespace SBG\App\Model;

use SBG\App\Model\Interfaces\OUT_MetricCompareStrategyInterface;

class OUT_MetricCompareStrategy implements OUT_MetricCompareStrategyInterface {

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
