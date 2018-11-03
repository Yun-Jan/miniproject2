<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsert()
    {
        $user= new User();
        $user->name='Tom';
        $user->email='123@mail.com';
        $user->password='123';

        $this->assertTrue($user->save());
    }
}
