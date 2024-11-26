<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Application;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicationTest extends TestCase
{
    use refreshDataBase;
    /**
     * A basic feature test example.
     */
    public function test_ListOfEntryCanBeRead()
    {
        $this->withoutExceptionHandling();
        Application::all();
        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertViews('home');
    }
}
