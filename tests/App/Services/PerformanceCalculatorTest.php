<?php

use App\Entity\Army;
use App\Enum\ArmySpeed;
use App\Enum\ArmyType;
use App\Enum\Faction;
use App\Services\PerformanceCalculator;
use PHPUnit\Framework\TestCase;

class PerformanceCalculatorTest extends TestCase
{
    private $army;

    public function setUp()
    {
        parent::setUp();
        $this->army = new Army(
            0,
            Faction::GDI(),
            ArmyType::INFANTRY(),
            700,
            200,
            ArmySpeed::FAST(),
            10,
            [],
            []
        );
    }

    /**
     * @test
     */
    public function is_able_to_calculate_health_performance_by_cost_properly()
    {
        $sut = new PerformanceCalculator;

        $result = $sut->calculateByHealth($this->army);

        $this->assertEquals(70.0, $result);
    }

    /**
     * @test
     */
    public function is_able_to_calculate_dps_performance_by_cost_properly()
    {
        $sut = new PerformanceCalculator;

        $result = $sut->calculateByDps($this->army);

        $this->assertEquals(20.0, $result);
    }
}
