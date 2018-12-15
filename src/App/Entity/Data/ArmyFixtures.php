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
    ];
}
