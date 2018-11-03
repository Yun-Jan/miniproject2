<?php

namespace Tests\Unit;

use App\car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarIntegerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarIntegerTest()
    {
        $Car = car::find(1);


        $this->assertTrue($Car->Year='integer' or 'null');
    }
}
