<?php

use App\Entity\Army;
use App\Repository\ArmyHydrator;
use App\Repository\InMemoryArmyRepository;
use PHPUnit\Framework\TestCase;

class InMemoryArmyRepositoryTest extends TestCase
{
    /** @var InMemoryArmyRepository */
    private $sut;

    public function setUp()
    {
        parent::setUp();
        $this->sut = new InMemoryArmyRepository(new ArmyHydrator);
    }

    /**
     * @test
     */
    public function is_able_to_find_an_entity_by_name_with_hydration()
    {
        $result = $this->sut->findByName('riflemen');

        $this->assertInstanceOf(Army::class, $result);
    }

    /**
     * @test
     * @expectedException App\Exceptions\EntityNotFoundException
     */
    public function will_throw_an_exception_on_no_existing_army()
    {
        $this->sut->findByName('blaaa');
    }

    /**
     * @test
     */
    public function is_able_to_go_through_all_fixtures_in_memory()
    {
        $result = $this->sut->findAll();

        $this->assertIsArray($result);
    }
}
