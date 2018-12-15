<?php

use PHPUnit\Framework\TestCase;
use App\Services\DummyService;

class DummyServiceTest extends TestCase
{
    public function testYes()
    {
        $sut = new DummyService;

        $this->assertTrue($sut->yes());
    }
}
