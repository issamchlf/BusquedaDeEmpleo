<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\offer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class offerControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_CheckICanCreateAnEntryOnOfferWithApi(){
        offer::factory(2)->create();

        $response = $this->get(route('apishow'));
        $response->assertStatus(200)->assertJsonCount(2);
    }
    public function test_CheckIfCanDeleteAnEntryOnOfferWithApi(){
        $offer = offer::factory(2)->create();

        $this->delete(route('apidestroy', $offer->first()->id));

        $this->assertDatabaseCount('offer', 1);

        $response = $this->get(route('apishow'));

        $response->assertStatus(200)->assertJsonCount(1);

    }
    public function test_CheckIfCanCreateAnEntryOnOfferWithApi(){
        $response = $this->post(route('apistore'),[
            'company_name' => 'Test company_name',
            'location' => 'Test location',
            'comment' => 'Test comment',
            'salary' => 'Test salary'
        ]);
        $response = $this->get(route('apishow'));
        $response->assertStatus(200)->assertJsonCount(1);
    }

    public function test_checkIfCanUpdateAnEntryOnOfferWithApi(){
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
        
        $offerId = $response->json()[0]['id'];

        $this->put(route('apiupdate', $offerId),[
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
