<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarIntTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCheckInt()
    {
        $randcar = \App\Car::inRandomOrder()->first();
        $year = (int)$randcar->year;
        $this->assertInternalType("int", $year);
    }
}
