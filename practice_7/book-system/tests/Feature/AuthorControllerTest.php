<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Author;

class AuthorControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_author_can_be_created()
    {
        $response = $this->post('/authors', [
            'name' => 'John',
            'surname' => 'Doe',
            'birthdate' => '1990-01-01'
        ]);

        // проверка статуса
        $response->assertStatus(302);

        // проверка редиректа
        $response->assertRedirect('/authors');

        // проверка в БД
        $this->assertDatabaseHas('authors', [
            'name' => 'John',
            'surname' => 'Doe'
        ]);
    }
    public function test_example(): void
    {
        
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
