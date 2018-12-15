<?php

namespace App\Entity\Data;

use App\Enum\ArmySpeed;
use App\Enum\ArmyType;

class ArmyFixtures
{
    public const DATA = [
        [
            'name'   => 'riflemen',
            'type'   => ArmyType::INFANTRY,
            'health' => 771,
            'dps'    => 111,
            'speed'  => ArmySpeed::FAST,
            'cost'   => 10,
            'strong' => [ArmyType::INFANTRY],
        ],
        [
            'name'   => 'rhino',
            'type'   => ArmyType::VEHICLE,
            'health' => 2311,
            'dps'    => 112,
            'speed'  => ArmySpeed::FAST,
            'cost'   => 30,
            'strong' => [ArmyType::INFANTRY, ArmyType::AIRCRAFT],
        ],
        [
            'name'   => 'predator tank',
            'type'   => ArmyType::VEHICLE,
            'health' => 5084,
            'dps'    => 394,
            'speed'  => ArmySpeed::SLOW,
            'cost'   => 60,
            'strong' => [ArmyType::VEHICLE],
        ],
        [
            'name'   => 'wolverine',
            'type'   => ArmyType::VEHICLE,
            'health' => 4314,
            'dps'    => 364,
            'speed'  => ArmySpeed::AVERAGE,
            'cost'   => 80,
            'strong' => [ArmyType::INFANTRY, ArmyType::AIRCRAFT],
        ],
        [
            'name'   => 'talon',
            'type'   => ArmyType::AIRCRAFT,
            'health' => 1400,
            'dps'    => 154,
            'speed'  => ArmySpeed::FASTEST,
            'cost'   => 30,
            'strong' => [ArmyType::INFANTRY, ArmyType::AIRCRAFT],
        ],
        [
            'name'   => 'drone swarm',
            'type'   => ArmyType::AIRCRAFT,
            'health' => 1315,
            'dps'    => 61,
            'speed'  => ArmySpeed::FAST,
            'cost'   => 10,
            'strong' => [ArmyType::INFANTRY],
        ],


        [
            'name'   => 'militant',
            'type'   => ArmyType::INFANTRY,
            'health' => 600,
            'dps'    => 87,
            'speed'  => ArmySpeed::FAST,
            'cost'   => 10,
            'strong' => [ArmyType::INFANTRY],
        ],
        [
            'name'   => 'buggy',
            'type'   => ArmyType::VEHICLE,
            'health' => 1320,
            'dps'    => 101,
            'speed'  => ArmySpeed::FASTEST,
            'cost'   => 30,
            'strong' => [ArmyType::INFANTRY, ArmyType::AIRCRAFT],
        ],
        [
            'name'   => 'scorpion tank',
            'type'   => ArmyType::VEHICLE,
            'health' => 2400,
            'dps'    => 250,
            'speed'  => ArmySpeed::AVERAGE,
            'cost'   => 60,
            'strong' => [ArmyType::VEHICLE],
        ],
        [
            'name'   => 'widowmaker',
            'type'   => ArmyType::VEHICLE,
            'health' => 4314,
            'dps'    => 1849,
            'speed'  => ArmySpeed::AVERAGE,
            'cost'   => 90,
            'strong' => [ArmyType::INFANTRY, ArmyType::AIRCRAFT],
        ],
        [
            'name'   => 'banshee',
            'type'   => ArmyType::AIRCRAFT,
            'health' => 1864,
            'dps'    => 440,
            'speed'  => ArmySpeed::FASTEST,
            'cost'   => 60,
            'strong' => [ArmyType::VEHICLE, ArmyType::AIRCRAFT],
        ],
        [
            'name'   => 'venom',
            'type'   => ArmyType::AIRCRAFT,
            'health' => 1200,
            'dps'    => 56,
            'speed'  => ArmySpeed::FASTEST,
            'cost'   => 30,
            'strong' => [ArmyType::INFANTRY],
        ],
        [
            'name'   => 'missile squad',
            'type'   => ArmyType::INFANTRY,
            'health' => 1491,
            'dps'    => 339,
            'speed'  => ArmySpeed::AVERAGE,
            'cost'   => 20,
            'strong' => [ArmyType::VEHICLE, ArmyType::AIRCRAFT],
        ],
    ];
}
