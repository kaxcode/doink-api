<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Laravel\Passport\Passport;

class ExampleTest extends TestCase
{
    /**
    * Tests get api method with password
    *
    * @return void
    */
    public function testApiGetMethodWithPassport()
    {
        Passport::actingAs(factory(User::class)->create(),['todos']);

        $response = $this->get('/api/todos');

        $response->assertStatus(200);
    }
}
