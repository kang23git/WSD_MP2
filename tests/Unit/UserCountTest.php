<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCount()
    {
        $allusers = \App\User::all();
        $usercount = $allusers->count();
        $this->assertEquals(50, $usercount);
    }
}
