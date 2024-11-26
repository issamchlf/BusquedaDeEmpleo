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

        $applications = Application::factrory(2)->
    }
}
