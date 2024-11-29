<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Work;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WorkTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_ListOfEntryCanBeRead()
    {
        $this->withoutExceptionHandling();

        Work::all();

        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('home');
    }
}

