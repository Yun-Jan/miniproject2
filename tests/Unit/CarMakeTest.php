<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMakeTest()
    {
        $Car = car::find(1);


        $this->assertTrue($Car->Make='Honda' or 'Toyota' or 'Ford');
    }
}
