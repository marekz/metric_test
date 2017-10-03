<?php

namespace SBG\App\Model\Interfaces;

interface MetricScallarReprezentInterface {
    public function convertDataSet();
    public function getCurrentData();
    public function getPreviousData();
}
