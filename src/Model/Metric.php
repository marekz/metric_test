<?php

namespace SBG\App\Model;

use SBG\App\Model\Interfaces\MetricInterface;

class Metric implements MetricInterface {
    
    private $metricStatus;
    
    public function __construct($metricStatus) {
        $this->metricStatus = $metricStatus;
    }

    public function getMetricStatus() {
        return $this->metricStatus;
    }
}