<?php

namespace SBG\tests\App\Model;

use PHPUnit_Framework_TestCase as TestCase;
use SBG\App\Model\MetricScallarReprezentNumber;

class MetricScallarReprezentNumberTest extends TestCase {

    /**
     * @test
     */
    public function checkIfReturnedDataIsNotNull(){
        $msrn = new MetricScallarReprezentNumber(1,2);
        $this->assertNotNull($msrn->getPreviousData());
        $this->assertNotNull($msrn->getCurrentData());
        
    }
    
    /**
     * @test
     */
    public function reprezentNumberFormat() {
        
    }
    
}
