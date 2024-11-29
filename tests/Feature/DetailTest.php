<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Detail;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DetailTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_ListOfEntryCanBeRead()
    {
        $this->withoutExceptionHandling();
        Detail::all();
        $response = $this->get(route('offer', 1));

        $response->assertStatus(200)
            ->assertViewIs('/offer.show');
    }
}
