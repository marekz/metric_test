<?php

namespace SBG\tests\App\Model;

use PHPUnit_Framework_TestCase as TestCase;
use SBG\App\Model\MetricCompareStrategy;

/**
 * @author mzdybel
 */
class OUT_MetricCompareStrategyTest extends TestCase {
    
    /**
     * @test
     */
    public function set_ARRAY_MetricCompareStrategy()
    {
        $strategy = new MetricCompareStrategy('array');
        $this->assertEquals($strategy->compareStrategy(), 'array');
    }
    
    /**
     * @test
     */
    public function set_INT_MetricCompareStrategy()
    {
        $strategy = new MetricCompareStrategy('int');
        $this->assertEquals($strategy->compareStrategy(), 'int');
    }
}
