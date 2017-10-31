<?php

namespace SBG\App\Model;

use SBG\App\Model\Interfaces\MetricScallarReprezentInterface;

/**
 * Convert number to metric accepted format
 */
class MetricScallarReprezentArray implements MetricScallarReprezentInterface {
    
    private $data;
    
    public function __construct($data) {
        $this->data = $data;
    }

    /**
     * 
     */
    public function convertDataSet() {
        
    }

    public function getData() {
        return $this->data;
    }

}