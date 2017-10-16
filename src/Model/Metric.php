<?php

namespace SBG\App\Model;

use SBG\App\Model\Interfaces\MetricInterface;

class Metric implements MetricInterface {

    public static function presentMetricStatus($status) {

        switch ($status) {
            case 1:
                $metricStatus = "BETTER";
                break;

            case 0:
                $metricStatus = "BZ";
                break;

            case -1:
                $metricStatus = "WORST";
                break;

            default :$metricStatus = "WRONG DATA!";
        }

        return $metricStatus;
    }

}
