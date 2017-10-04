<?php

namespace SBG\App\Model;

use SBG\App\Model\Interfaces\MetricPreviousInterface as MPI;

class MetricPrevious implements MPI {
    
    private $currentMetric;
    private $lastMetric;
    
    public function current($currentMetric) {
        return $this->currentMetric = $currentMetric;
    }

    public function last($lastMetric) {
        return $this->lastMetric = $lastMetric;
    }

    public function alertWhenCurrentIsLessLast() {
        if($this->currentMetric < $this->lastMetric) {
            return true;
        } else {
            return false;
        }
    }
}