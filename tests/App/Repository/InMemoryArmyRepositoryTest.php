<?php

use App\Entity\Army;
use App\Repository\InMemoryArmyRepository;
use PHPUnit\Framework\TestCase;

class InMemoryArmyRepositoryTest extends TestCase
{
    /**
     * @test
     */
    public function is_able_to_find_an_entity_by_name_with_hydration()
    {
        $sut = new InMemoryArmyRepository;

        $result = $sut->findByName('riflemen');

        $this->assertInstanceOf(Army::class, $result);
    }

    /**
     * @test
     */
    public function is_able_to_go_through_all_fixtures_in_memory()
    {
        $sut = new InMemoryArmyRepository;

        $result = $sut->findAll();

        $this->assertIsArray($result);
    }
}
