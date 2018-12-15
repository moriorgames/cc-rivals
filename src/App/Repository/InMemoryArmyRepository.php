<?php

namespace App\Repository;

use App\Entity\Army;
use App\Entity\Data\ArmyFixtures;
use App\Enum\ArmySpeed;
use App\Enum\ArmyType;

class InMemoryArmyRepository implements IArmyRepository
{
    public function findByName(string $name): Army
    {
        foreach (ArmyFixtures::DATA as $d) {

            if ($d['name'] === $name) {

                return new Army(
                    $d['name'],
                    new ArmyType($d['type']),
                    $d['health'],
                    $d['dps'],
                    new ArmySpeed($d['speed']),
                    $d['cost'],
                    $d['strong']
                );
            }
        }
    }
}
