<?php

namespace SBG\App\Model;

/**
 * Abstract class represent every possible metric format
 */
abstract class MetricScallarReprezentFactory {

    /**
     * Get parameters for metric statistics from different place
     */
    abstract function getMetricParameter();
}

/**
 * Class reprezent numeber format 
 */
class MetricScallarReprezentNumberFactory extends MetricScallarReprezentFactory {

    public function getMetricParameter() {
        
    }

}

/**
 * Abstract class form number parameters
 */
abstract class NumericFormatParameters {

    abstract function getNumericFormatData();
}

/**
 * Abstract class form string parameters
 */
abstract class StringFormatParameters {

    abstract function getStringFormatData();
}


/**
 * Abstract class form array parameters
 */
abstract class ArrayFormatParameters {

    abstract function getArrayFormatData();
}




/**
 * Class reprezent string format 
 */
//class MetricScallarReprezentStringFactory extends MetricScallarReprezentFactory {
//
//    public function getMetricParameter() {
//        
//    }
//
//}

/**
 * Class reprezent arrays format 
 */
//class MetricScallarReprezentArraysFactory extends MetricScallarReprezentFactory {
//
//    public function getMetricParameter() {
//        
//    }
//
//}