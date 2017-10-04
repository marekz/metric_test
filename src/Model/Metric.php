<?php

namespace SBG\App\Model;

use SBG\App\Model\Interfaces\MetricInterface;
use SBG\App\Model\MetricCompare;

class Metric implements MetricInterface {
    
    private $metricStatus;

    public function presentMetricStatus() {
        return $this->metricStatus;
    }

    public function getCompareResult() {
        $this->metricStatus = new MetricCompare($current, $previous);
    }

}