<?php

namespace SBG\App\Model;

use SBG\App\Model\MetricPreviousInterface as MPI;

class MetricPrevious implements MPI {
    //put your code here
    public function current($metric) {
        return $metric;
    }

    public function last($metric) {
        return $metric;
    }

}
