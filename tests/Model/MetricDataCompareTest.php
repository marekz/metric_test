<?php

//namespace SBG\tests\App\Model;
//
//use PHPUnit_Framework_TestCase as TestCase;
//use SBG\App\Model\MetricCompare;
//
///**
// * Check between previous and current data
// *
// * @author mzdybel
// */
//class MetricDataCompareTest extends TestCase {
//    
//    /**
//     * @test
//     * if current date is equal to previous data then return 0
//     */
//    public function returnTruIfComparedDataIsEqual(){
//        $compareTest = new MetricCompare("numeric");
//        if($compareTest->compareData() == 0){
//            $this->assertEquals(0, $compareTest->compareData());
//        }else {
//            $this->assertNotEquals(0, $compareTest->compareData());
//        }
//    }
//
//    /**
//     * @test
//     * if current date is worst then previous data then return -1
//     */
//    public function returnWorsIfCurrentDataIsWorsThenPrevious(){
//        $compareTest = new MetricCompare("numeric");
//        if($compareTest->compareData() == -1) {
//            $this->assertEquals(-1, $compareTest->compareData());
//            
//        } else {
//            $this->assertNotEquals(-1, $compareTest->compareData());
//            
//        }
//    }
//
//    /**
//     * @test
//     * if current date is better then previous data then return 1
//     */
//    public function returnBetterIfCurrentDataIsBeterThenPrevious(){
//        $compareTest = new MetricCompare("numeric");
//        if($compareTest->compareData() == 1) {
//            $this->assertEquals(1, $compareTest->compareData());
//            
//        } else {
//            $this->assertNotEquals(1, $compareTest->compareData());
//            
//        }
//    }
//}