<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCheckModel()
    {
        $randcar = \App\Car::inRandomOrder()->first();
        $model = (string)$randcar->model;
        $this->assertInternalType("string", $model);
    }
}
