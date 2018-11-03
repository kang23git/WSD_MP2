<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $finduser = \App\User::find(37);
        $finduser->delete();
        $users = \App\User::all();
        $this->assertDatabaseMissing('users', ["name" => $finduser->name]);
    }
}
