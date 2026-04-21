<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Author;
use App\Models\Book;

class BookTest extends TestCase
{
     use RefreshDatabase;

    public function test_short_title_is_saved_correctly()
    {
        $author = Author::factory()->create();

        $book = Book::create([
            'title' => 'Long Book Title',
            'short_title' => 'Short',
            'year' => 2024,
            'author_id' => $author->id
        ]);

        $this->assertEquals('Short', $book->short_title);
    }
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
