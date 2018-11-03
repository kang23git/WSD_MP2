<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCar()
    {
        $findcar = \App\Car::find(35);
        $findcar->year ='2000';
        $findcar->save();
        $this->assertEquals('2000', $findcar->year);
    }
}
