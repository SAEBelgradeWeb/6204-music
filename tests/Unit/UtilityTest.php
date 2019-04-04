<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Utility;

class UtilityTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_checks_full_name_method()
    {
        $utility = new Utility();
        $this->assertEquals('John Doe', $utility->fullName("John", 'Doe'));
    }
}
