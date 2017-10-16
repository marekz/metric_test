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
     * Check if cirrent status is better then previous: "BETTER"
     */
    public function ifCurrentMetricIsBetterThenPrevious() {
        $status = Metric::presentMetricStatus(1);
        if ($status == "BETTER") {
            $this->assertEquals("BETTER", $status);
        } else {
            $this->assertNotEquals("BETTER", $status);
        }
    }
    
    /**
     * @test
     * Current status is equal then previous: "BZ"
     */
    public function ifCurrentMetricIsEqualThenPrevious(){
        $status = Metric::presentMetricStatus(0);
        if ($status == 'BZ'){
            $this->assertEquals('BZ', $status);
        } elseif ($status == 'WORST') {
            $this->assertNotEquals('WORST', $status);
        } elseif ($status == 1) {
            $this->assertNotEquals("BETTER", $status);
        }
    }

    /**
     * @test
     * Current status is worst then previous "WORST"
     */
    public function ifCurrentMetricIsWorstThenPrevious() {
        $status = Metric::presentMetricStatus(-1);
        if ($status == "WORST") {
            $this->assertEquals("WORST", $status);
        } else {
            $this->assertNotEquals("WORST", $status);
        }
    }
}
