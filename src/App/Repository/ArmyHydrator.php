<?php

namespace App\Repository;

use App\Entity\Army;
use App\Enum\ArmySpeed;
use App\Enum\ArmyType;
use App\Enum\Faction;
use App\Enum\Target;

class ArmyHydrator
{
    public function hydrate(array $data): Army
    {
        $army = new Army(
            $data['name'],
            new Faction($data['faction']),
            new ArmyType($data['type']),
            $data['health'],
            $data['dps'],
            new ArmySpeed($data['speed']),
            $data['cost']
        );

        foreach ($data['strong'] as $strong)
            $army->addStrong(new ArmyType($strong));

        foreach ($data['targets'] as $target)
            $army->addTarget(new Target($target));

        return $army;
    }
}
