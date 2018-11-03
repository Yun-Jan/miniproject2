<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteTest()
    {
        {
            $user= new User();
            $user->name='Q';
            $user->email='my@mail.com';
            $user->password='123';
            $user->save();

            $this->assertTrue($user->delete());
        }
    }
}
