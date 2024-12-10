<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Work;
use App\Models\Detail;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DetailControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the index method returns all details for a given Work ID
     */
    public function test_index_returns_details_for_work()
    {
        // Create a work and associated details
        $work = Work::factory()->create();
        $details = Detail::factory()->count(3)->create(['work_id' => $work->id]);

        // Make a request to the index endpoint
        $response = $this->getJson(route('api.details.index', $work->id));

        // Assertions
        $response->assertStatus(200);
        $response->assertJsonCount(3);
        $response->assertJson($details->toArray());
    }

    /**
     * Test if store returns an error for mismatched data arrays
     */
    public function test_store_mismatched_data_returns_error()
    {
        $work = Work::factory()->create();

        $payload = [
            'company_name' => ['Company A', 'Company B'],
            'location' => ['Location A'], // Only one location instead of two
            'comment' => ['Comment A'],
            'salary' => [50000, 60000],
            'URL' => ['http://test.com/A', 'http://test.com/B']
        ];

        $response = $this->postJson(route('api.details.store', $work->id), $payload);

        $response->assertStatus(400);
        $response->assertJson(['error' => 'Mismatched data arrays']);
    }

    /**
     * Test the show method for displaying a specific Work
     */
    public function test_show_returns_work_details()
    {
        $work = Work::factory()->create();

        $response = $this->getJson(route('api.details.show', $work->id));

        $response->assertStatus(200);
        $response->assertJson($work->toArray());
    }

    /**
     * Test updating a detail successfully
     */
   


}
