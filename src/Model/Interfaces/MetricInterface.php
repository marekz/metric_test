<?php

namespace SBG\App\Model\Interfaces;

interface MetricInterface {
    /**
     * presentMetricStatus, zwracać powinien informację o statusie ankiety
     * w zależności od tego jak wyglądają dene z okresu bieżącego i poprzedniego
     * zwracać powinien jeden ze statusów:
     *  1: poprawa
     *  0: bez zmian
     * -1: pogorszenie statusów
     */
    public static  function presentMetricStatus($status);
}
