<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUser()
    {
        $finduser = \App\User::find(30);
        $finduser->name ='Steve Smith';
        $finduser->save();
        $this->assertEquals('Steve Smith', $finduser->name);
    }
}
