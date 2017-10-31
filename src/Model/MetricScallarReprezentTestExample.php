<?php

namespace SBG\App\Model;

/**
 * Factory Abstract class represent every possible metric
 */
abstract class MetricScallarReprezentFactory {

    /**
     * Get parameters for metric data from different place
     */
    abstract function getMetricParameter();
}

/**
 * Factory class get parameters for metric in number format
 */
class MetricScallarReprezentNumberFactory extends MetricScallarReprezentFactory {

    public function getMetricParameter() {
        new NumberFormatParameter();
    }

}

/**
 * Abstract class for any metric parameters
 */
abstract class MetricParameter {

    abstract function getCurrentMetricData();

    abstract function getPreviousMetricData();
}

/**
 * Get metric parameter in number format
 */
class NumberFormatParameter extends \SBG\App\Model\MetricParameter {

    public function getCurrentMetricData() {
        return 10;
    }

    public function getPreviousMetricData() {
        return 9;
    }

}

$newMetric = 10;
$type = gettype($newMetric);

var_dump($type);

switch ($type) {
    case "integer":
        new NumberFormatParameter();
        break;
    
    default:
        echo "Wrong parameters";
}