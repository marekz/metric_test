<?php

namespace SBG\tests\App\Model;

use PHPUnit_Framework_TestCase as TestCase;
use SBG\App\Model\MetricPrevious;

class MetricPreviousTest extends TestCase {

    /**
     * @test
     */
    public function when_current_is_less_when_last() {
        $currMetric = 1;
        $prevMetric = 2;
        $metricPrevious = new MetricPrevious();
        $curr = $metricPrevious->current($currMetric);
        $prev = $metricPrevious->last($prevMetric);

        $this->assertGreaterThan($curr, $prev);
    }

    /**
     * @test
     */
    public function when_current_is_equal_as_last() {
        $currMetric = 1;
        $prevMetric = 1;
        $metricPrevious = new MetricPrevious();
        $curr = $metricPrevious->current($currMetric);
        $prev = $metricPrevious->last($prevMetric);

        $this->assertEquals($curr, $prev);
    }

    /**
     * @test
     */
    public function when_current_is_bigger_when_last() {
        $currMetric = 2;
        $prevMetric = 1;
        $metricPrevious = new MetricPrevious();
        $curr = $metricPrevious->current($currMetric);
        $prev = $metricPrevious->last($prevMetric);

        $this->assertLessThan($curr, $prev);
    }

    /**
     * @test
     */
    public function send_alert_when_current_is_less_when_last() {

        $currMetric = 1;
        $prevMetric = 2;
        $metricPrevious = new MetricPrevious();
        $curr = $metricPrevious->current($currMetric);
        $prev = $metricPrevious->last($prevMetric);
        $metricStatus = $metricPrevious->alertWhenCurrentIsLessLast();
        
        $this->assertTrue($metricStatus);
    }

    /**
     * @test
     */
    public function send_alert_when_current_is_bigger_when_last() {

        $currMetric = 2;
        $prevMetric = 1;
        $metricPrevious = new MetricPrevious();
        $curr = $metricPrevious->current($currMetric);
        $prev = $metricPrevious->last($prevMetric);
        $metricStatus = $metricPrevious->alertWhenCurrentIsLessLast();
        
        $this->assertFalse($metricStatus);
    }

}
