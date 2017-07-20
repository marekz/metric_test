<?php

namespace SBG\App\Model;

interface MetricPreviousInterface {
    public function last($metric);
    public function current($metric);
}
