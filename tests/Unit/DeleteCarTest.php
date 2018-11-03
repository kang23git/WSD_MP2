<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $findcar = \App\Car::find(15);
        $findcar->delete();
        $car = \App\Car::all();
        $this->assertDatabaseMissing('cars', ["id" => $findcar->id]);
    }
}
