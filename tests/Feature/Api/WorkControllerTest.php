<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Work;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WorkControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_CheckIfRecieveAllEntryOfWorkJsonFile(){

        Work::factory(2)->create(); 
        
        $response = $this->get(route('apihome'));

        $response->assertStatus(200)->assertJsonCount(2);

    }
    public function test_CheckIfCanDeleteAnEntryOnWorkWithApi(){

        $works = Work::factory(2)->create();

        $this->delete(route('apidestroy', $works->first()->id));

        $this->assertDatabaseCount('works', 1);

        $response  = $this->get(route('apihome'));

        $response->assertStatus(200)->assertJsonCount(1);

    }

    public function test_CheckIfCanCreateAnEntryOnWorkWithApi()
    {
        $response = $this->post(route('apistore'),[
            'job_title' => 'Test job_title',
            'status' => 'Test status',
            'category' => 'Test category'
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)->assertJsonCount(1);

    }
    public function test_checkIfCanUpdateAnEntryOnWorkWithApi()
    {
        $this->post(route('apistore'),[
            'job_title' => 'Test job_title',
            'status' => 'Test status',
            'category' => 'Test category'  
        ]);

        $data = [
            'job_title' => 'Test job_title'
        ];

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($data);
        
        $WorkId = $response->json()[0]['id'];

        $this->put(route('apiupdate', $WorkId),[
            'job_title' => 'Test job_title Updated',
            'status' => 'Test status Updated',
            'category' => 'Test category Updated'
        ]);

        $newData = [
            'job_title' => 'Test job_title Updated',
        ];

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($newData);
        
    }

    public function test_CheckIfCanFindAnEntryByIdOnWorkWithApi()
    {
        $this->post(route('apistore'),[
            'job_title' => 'Test job_title',
            'status' => 'Test status',
            'category' => 'Test category'
        ]);
        $data = [
            'job_title' => 'Test job_title'   
        ];
        $response = $this->get(route('apishow', 1));
        $response->assertStatus(200)
            ->assertJsonCount(6)
            ->assertJsonFragment($data);
    }
}
