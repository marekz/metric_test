<?php

namespace SBG\App\Model\Interfaces;

interface MetricPreviousInterface {
    public function last($metric);
    public function current($metric);
    public function alertWhenCurrentIsLessLast();
}
