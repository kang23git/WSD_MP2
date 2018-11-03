<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $randcar = \App\Car::inRandomOrder()->first();
        $carmake=$randcar->make;
        $this->assertContains($carmake,['ford','toyota','honda']);
    }
}
