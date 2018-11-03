<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarInsertTest()
    {
        $Car= new car();
        $Car->Make='Honda';
        $Car->Model='ABC';
        $Car->Year='2016';


        $this->assertTrue($Car->save());
    }
}
