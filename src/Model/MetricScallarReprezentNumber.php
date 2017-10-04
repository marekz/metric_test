<?php

namespace SBG\App\Model;

use SBG\App\Model\Interfaces\MetricScallarReprezentInterface;

/**
 * Convert number to metric accepted format
 */
class MetricScallarReprezentNumber implements MetricScallarReprezentInterface {
    
    private $reportType;
    
    public function __construct($reportType) {
        $this->reportType = $reportType;
    }

    /**
     * 
     */
    public function convertDataSet() {
        
    }
    
    public function getCurrentData(){
        return -1;
    }
    
    public function getPreviousData(){
        return 1;
    }

    public function getData() {
        return $this->reportType;
    }

}