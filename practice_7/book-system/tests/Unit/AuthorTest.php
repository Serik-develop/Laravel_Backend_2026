<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Author;

class AuthorTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_full_name_returns_correct_value()
    {
        $author = new Author([
            'name' => 'John',
            'surname' => 'Doe'
        ]);

        $this->assertEquals('John Doe', $author->fullName());
    }

    public function test_example(): void
    {
        $this->assertTrue(true);
    }
}
