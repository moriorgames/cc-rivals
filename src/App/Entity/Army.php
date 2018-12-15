<?php

namespace App\Entity;

use App\Enum\ArmySpeed;
use App\Enum\ArmyType;

class Army
{
    private $name;
    private $type;
    private $health;
    private $dps;
    private $speed;
    private $cost;
    private $strong;

    public function __construct(
        string $name, ArmyType $type, int $health, int $dps, ArmySpeed $speed, int $cost, array $strong
    )
    {
        $this->name = $name;
        $this->type = $type;
        $this->health = $health;
        $this->dps = $dps;
        $this->speed = $speed;
        $this->cost = $cost;
        $this->strong = $strong;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): ArmyType
    {
        return $this->type;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getDps(): int
    {
        return $this->dps;
    }

    public function getSpeed(): ArmySpeed
    {
        return $this->speed;
    }

    public function getCost(): int
    {
        return $this->cost;
    }

    public function getStrong(): array
    {
        return $this->strong;
    }
}
