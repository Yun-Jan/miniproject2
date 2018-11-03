<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarUpdateTest()
    {
        $Car= car::find(1);
        $Car->year='2000';
        $Car->save();

        $this->assertTrue($Car->update());
    }
}
