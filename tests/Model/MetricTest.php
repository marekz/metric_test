<?php

namespace SBG\tests\App\Model;

use PHPUnit_Framework_TestCase as TestCase;
use SBG\App\Model\Metric;

/**
 * Description of MetricTest
 */
class MetricTest extends TestCase {

    /**
     * @test
     * Current status is worst then previous "-1"
     */
    public function ifCurrentMetricIsWorstThenPrevious() {
        $metricStatus = new Metric(-1);
        $status = $metricStatus->getMetricStatus();
        if ($status == -1) {
            $this->assertEquals(-1, $status);
        } else {
            $this->assertNotEquals(-1, $status);
        }
    }

    /**
     * @test
     * Check if cirrent status is better then previous: "1"
     */
    public function ifCurrentMetricIsBetterThenPrevious() {
        $metricStatus = new Metric(1);
        $status = $metricStatus->getMetricStatus();
        if ($status == 1) {
            $this->assertEquals(1, $status);
        } else {
            $this->assertNotEquals(1, $status);
        }
    }
    
    /**
     * @test
     * Current status is equal then previous: "0"
     */
    public function ifCurrentMetricIsEqualThenPrevious(){
        $metricStatus = new Metric(0);
        $status = $metricStatus->getMetricStatus();
        if ($status == 0){
            $this->assertEquals(0, $status);
        } elseif ($status == -1) {
            $this->assertNotEquals(0, $status);
        } elseif ($status == 1) {
            $this->assertNotEquals(0, $status);
        }
    }
}
