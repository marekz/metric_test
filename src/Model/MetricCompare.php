<?php

namespace SBG\App\Model;

use SBG\App\Model\Interfaces\MetricCompareInterface;

/**
 * Compare between current and previous data
 */
class MetricCompare implements MetricCompareInterface {

    private $currentData;
    private $previousData;

    public function __construct($current, $previous) {
        $this->currentData = $current;
        $this->previousData = $previous;
    }

    public function compareData() {

        if ($this->currentData == $this->previousData) {
            return 0;
        } else if ($this->currentData >= $this->previousData) {
            return 1;
        } else if ($this->currentData <= $this->previousData) {
            return -1;
        }
        return null;
    }

}
