<?php

namespace App\Repository;

use App\Entity\Army;
use App\Entity\Data\ArmyFixtures;
use App\Enum\ArmySpeed;
use App\Enum\ArmyType;
use App\Enum\Faction;
use App\Exceptions\EntityNotFoundException;

class InMemoryArmyRepository implements IArmyRepository
{
    public function findAll(): array
    {
        $armies = [];
        foreach (ArmyFixtures::DATA as $data) {
            $armies[] = $this->hydrate($data);
        }

        return $armies;
    }

    public function findByName(string $name): Army
    {
        foreach (ArmyFixtures::DATA as $data) {

            if ($data['name'] === $name) {

                return $this->hydrate($data);
            }
        }

        throw new EntityNotFoundException('There is no entity with name ' . $name);
    }

    private function hydrate(array $data): army
    {
        return new Army(
            $data['name'],
            new Faction($data['faction']),
            new ArmyType($data['type']),
            $data['health'],
            $data['dps'],
            new ArmySpeed($data['speed']),
            $data['cost'],
            $data['strong'],
            $data['targets']
        );
    }
}
