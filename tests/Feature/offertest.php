<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\offer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class offerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_ListOfEntryCanBeRead()
    {
        $this->withoutExceptionHandling();
        offer::all();
        $response = $this->get(route('offer', 1));

        $response->assertStatus(200)
            ->assertViewIs('/offer.show');
    }
}
