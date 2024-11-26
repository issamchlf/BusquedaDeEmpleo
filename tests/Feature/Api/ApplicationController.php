<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Application;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicationController extends TestCase
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

        $applications = Application::factrory(2)->create();

        $this->delete(route('apidestroy', $applications->first()->id));

        $this->assertDatabaseCount('application', 1);

        $response  = $this->get(route('apihome'));

        $response->assertStatus(200)->assertJsonCount(1);

    }

    public function test_CheckICanCreateAnEntryOnApplicationWithApi()
    {
        $response = $this->post(route('apistore'),[
            'job title' => 'Test JobTitle',
            'status' => 'Test Status',
            'category' => 'Test Categpry'
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)->assertJsonCount(1);

    }
    public function test_checkIfCanUpdateAnEntryOnApplicationWithApi()
    {
        $this->post(route('apistore'),[
            'job title' => 'Test JobTitle',
            'status' => 'Test Status',
            'category' => 'Test Category'  
        ]);

        $data = [
            'job title' => 'Test JobTitle'
        ];

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($data);
        
        $ApplicationId = $response->json()[0]['id'];

        $this->put(route('apiupdate', $ApplicationId),[
            'job title' => 'Test JobTitle Updated',
            'status' => 'Test Status Updated',
            'category' => 'Test Category Updated'
        ]);

        $newData = [
            'job title' => 'Test JobTitle Updated',
        ];

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($newData);
        
    }

    public function test_CheckIfCanFindAnEntryByIdOnApplicationWithApi()
    {
        $this->post(route('apistore'),[
            'job title' => 'Test JobTitle',
            'status' => 'Test Status',
            'category' => 'Test Category'
        ]);
        $data = [
            'job title' => 'Test JobTitle',   
        ];
        $response = $this->get(route('apishow', 1));
        $response->assertStatus(200)
            ->assertJsonCount(5)
            ->assertJsonFragment($data);
    }
}
