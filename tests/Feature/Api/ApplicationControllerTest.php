<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Application;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicationControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_CheckIfRecieveAllEntryOfAppJsonFile(){

        Application::factory(2)->create(); 
        
        $response = $this->get(route('apihome'));

        $response->assertStatus(200)->assertJsonCount(2);

    }
    public function test_CheckIfCanDeleteAnEntryOnApplicationWithApi(){

        $applications = Application::factory(2)->create();

        $this->delete(route('apidestroy', $applications->first()->id));

        $this->assertDatabaseCount('applications', 1);

        $response  = $this->get(route('apihome'));

        $response->assertStatus(200)->assertJsonCount(1);

    }

    public function test_CheckIfCanCreateAnEntryOnApplicationWithApi()
    {
        $response = $this->post(route('apistore'),[
            'job_title' => 'Test job_title',
            'status' => 'Test status',
            'category' => 'Test category'
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)->assertJsonCount(1);

    }
    public function test_checkIfCanUpdateAnEntryOnApplicationWithApi()
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
        
        $ApplicationId = $response->json()[0]['id'];

        $this->put(route('apiupdate', $ApplicationId),[
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

    public function test_CheckIfCanFindAnEntryByIdOnApplicationWithApi()
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