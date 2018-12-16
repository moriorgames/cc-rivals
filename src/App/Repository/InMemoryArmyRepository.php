<?php

namespace App\Repository;

use App\Entity\Army;
use App\Entity\Data\ArmyFixtures;
use App\Exceptions\EntityNotFoundException;

class InMemoryArmyRepository implements IArmyRepository
{
    private $hydrator;

    public function __construct(ArmyHydrator $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    public function findAll(): array
    {
        $armies = [];
        foreach (ArmyFixtures::DATA as $data) {
            $armies[] = $this->hydrator->hydrate($data);
        }

        return $armies;
    }

    public function findByName(string $name): Army
    {
        foreach (ArmyFixtures::DATA as $data) {

            if ($data['name'] === $name) {

                return $this->hydrator->hydrate($data);
            }
        }

        throw new EntityNotFoundException('There is no entity with name ' . $name);
    }
}
