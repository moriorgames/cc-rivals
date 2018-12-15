<?php

namespace App\Repository;

use App\Entity\Army;

interface IArmyRepository
{
    public function findAll(): array;

    public function findByName(string $name): Army;
}
