<?php

namespace SBG\App\Model;

use SBG\App\Model\Interfaces\MetricCompareInterface;
use SBG\App\Model\MetricScallarReprezentNumber;

/**
 * Compare between current and previous data
 */
class MetricCompare implements MetricCompareInterface {

    private $currentData;
    private $previousData;
    private $reportType;

    public function __construct($reportType) {
        $this->reportType = $reportType;
    }

    public function getData() {
        $data = new MetricScallarReprezentNumber($this->reportType);
        $this->currentData = $data->getCurrentData();
        $this->previousData = $data->getPreviousData();
    }

    public function compareData() {
        
        $this->getData();
        
        if ($this->currentData == $this->previousData) {
            return 0;
        } else if ($this->currentData >= $this->previousData) {
            return 1;
        } else if ($this->currentData <= $this->previousData) {
            return -1;
        }
        return null;
    }

}
