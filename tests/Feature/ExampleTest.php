<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
<<<<<<< HEAD
        $this->assertTrue(true);
=======
        $response = $this->get('/');

        $response->assertStatus(200);
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
    }
}
