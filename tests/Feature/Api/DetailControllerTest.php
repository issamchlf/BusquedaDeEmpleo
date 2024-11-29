<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Detail;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DetailControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_CheckICanCreateAnEntryOnDetailWithApi(){
        Detail::factory(2)->create();

        $response = $this->get(route('apishow'));
        $response->assertStatus(200)->assertJsonCount(2);
    }
    public function test_CheckIfCanDeleteAnEntryOnDetailWithApi(){
        $details = Detail::factory(2)->create();

        $this->delete(route('apidestroy', $details->first()->id));

        $this->assertDatabaseCount('Detail', 1);

        $response = $this->get(route('apishow'));

        $response->assertStatus(200)->assertJsonCount(1);

    }
    public function test_CheckIfCanCreateAnEntryOnDetailWithApi(){
        $response = $this->post(route('apistore'),[
            'company_name' => 'Test company_name',
            'location' => 'Test location',
            'comment' => 'Test comment',
            'salary' => 'Test salary'
        ]);
        $response = $this->get(route('apishow'));
        $response->assertStatus(200)->assertJsonCount(1);
    }

    public function test_checkIfCanUpdateAnEntryOnDetailWithApi(){
        $this->post(route('apistore'),[
            'company_name' => 'Test company_name',
            'location' => 'Test location',
            'comment' => 'Test comment',
            'salary' => 'Test salary'
        ]);
        $data = [
            'company_name' => 'Test company_name'
        ];
        $response = $this->get(route('apishow'));
        $response->assertStatus(200)
            ->asserJsonCount(1)
            ->assertJsonFragment($data);
        
        $DetailId = $response->json()[0]['id'];

        $this->put(route('apiupdate', $DetailId),[
            'company_name' => 'Test company_name Updated',
            'location' => 'Test location Updated',
            'comment' => 'Test comment Updated',
            'salary' => 'Test salary Updated'
        ]);

        $newData = [
            'company_name' => 'Test company_name Updated',
        ];
        $response = $this->get(route('apishow'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($newData);
    }
}
