<?php

namespace App\Services;

use App\Entity\Army;

class PerformanceCalculator
{
    public function calculateByHealth(Army $army): float
    {
        return round($army->getHealth() / $army->getCost(), 2);
    }

    public function calculateByDps(Army $army): float
    {
        return round($army->getDps() / $army->getCost(), 2);
    }
}
