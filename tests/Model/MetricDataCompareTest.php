<?php

namespace SBG\tests\App\Model;

use PHPUnit_Framework_TestCase as TestCase;
use SBG\App\Model\MetricCompare;

/**
 * Check between previous and current data
 *
 * @author mzdybel
 */
class MetricDataCompareTest extends TestCase {
    
    /**
     * @test
     * if current date is equal to previous data then return 0
     */
    public function returnTruIfComparedDataIsEqual(){
        $compareTest = new MetricCompare(1, 1);
        $this->assertEquals(0, $compareTest->compareData());
    }

    /**
     * @test
     * if current date is worst then previous data then return -1
     */
    public function returnWorsIfCurrentDataIsWorsThenPrevious(){
        $compareTest = new MetricCompare(0, 1);
        $this->assertEquals(-1, $compareTest->compareData());
    }

    /**
     * @test
     * if current date is better then previous data then return 1
     */
    public function returnBetterIfCurrentDataIsBeterThenPrevious(){
        $compareTest = new MetricCompare(1, 0);
        $this->assertEquals(1, $compareTest->compareData());
    }
}