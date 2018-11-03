<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarDeleteTest()
    {
        $Car= new car();
        $Car->Make='Honda';
        $Car->Model='ABC';
        $Car->Year='2016';
        $Car->save();

        $this->assertTrue($Car->delete());
    }
}
