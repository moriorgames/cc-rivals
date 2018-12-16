<?php

use App\Enum\ArmySpeed;
use App\Enum\ArmyType;
use App\Enum\Faction;
use App\Enum\Target;
use App\Repository\ArmyHydrator;
use PHPUnit\Framework\TestCase;

class ArmyHydratorTest extends TestCase
{
    /**
     * @test
     */
    public function is_able_to_hydrate_entity_from_data_and_return_an_army()
    {
        $data = [
            'name'    => 'riflemen',
            'faction' => Faction::GDI,
            'type'    => ArmyType::INFANTRY,
            'health'  => 924,
            'dps'     => 134,
            'speed'   => ArmySpeed::FAST,
            'cost'    => 10,
            'strong'  => [ArmyType::INFANTRY],
            'targets' => [Target::GROUND],
        ];
        $sut = new ArmyHydrator;

        $result = $sut->hydrate($data);

        $this->assertEquals($data['name'], $result->getName());
        $this->assertEquals($data['faction'], $result->getFaction());
        $this->assertEquals($data['type'], $result->getType());
        $this->assertEquals($data['health'], $result->getHealth());
        $this->assertEquals($data['dps'], $result->getDps());
        $this->assertEquals($data['speed'], $result->getSpeed());
        $this->assertEquals($data['cost'], $result->getCost());
        $this->assertEquals($data['strong'], $result->getStrong());
        $this->assertEquals($data['targets'], $result->getTargets());
    }
}
