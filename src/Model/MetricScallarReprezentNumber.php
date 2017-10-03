<?php

namespace SBG\App\Model;

use SBG\App\Model\Interfaces\MetricScallarReprezentInterface;

/**
 * Convert number to metric accepted format
 */
class MetricScallarReprezentNumber implements MetricScallarReprezentInterface {
    
    private $currentData;
    private $previousData;
    
    public function __construct($currentData, $previousData) {
        $this->currentData = $currentData;
        $this->previousData = $previousData;
    }

    /**
     * 
     */
    public function convertDataSet() {
        
    }

    public function getCurrentData() {
        return $this->currentData;
    }

    public function getPreviousData() {
        return $this->previousData;
    }

}
