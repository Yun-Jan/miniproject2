<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
USE PHPUnit\Framework\Constraint\IsType;
use App\car;

class CarCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarCountTest()
    {
        $Car= car::All();
        $CarCount=$Car->count();
        $this->assertInternalType(IsType::TYPE_INT,$CarCount);
    }
}
