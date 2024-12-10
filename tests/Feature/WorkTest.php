<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Work;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WorkTest extends TestCase
{
    use refreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_ListOfWorkEntryCanBeRead()
    {
        $this->withoutExceptionHandling();

        Work::all();

        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('home');
    }

    /**
     * Test the show method.
     */
    public function test_show_displays_work_details()
    {
        // Arrange: Create a Work entry with details
        $work = Work::factory()->create();
    
        // Act: Make a GET request to the show route
        $response = $this->get(route('show', $work->id));
    
        // Assert: Verify the response contains the work details
        $response->assertStatus(200);
        $response->assertViewHas('work', $work); // Ensure 'work' is passed correctly
        $response->assertSee($work->job_title);
    }

    /**
     * Test the edit method.
     */
    public function test_edit_displays_work_edit_form()
    {
        // Arrange: Create a Work entry
        $work = Work::factory()->create();

        // Act: Make a GET request to the edit route
        $response = $this->get(route('works.edit', $work->id));

        // Assert: Verify the response contains the edit form
        $response->assertStatus(200);
        $response->assertViewHas('work', $work);
        $response->assertSee($work->job_title);
    }

    /**
     * Test the update method.
     */
    public function test_update_modifies_existing_work()
    {
        // Arrange: Create a Work entry
        $work = Work::factory()->create();

        // Prepare updated data
        $updatedData = [
            'job_title' => 'Updated Title',
            'status' => 'Inactive',
            'category' => 'Updated Category',
        ];

        // Act: Send a PUT request to the update route
        $response = $this->put(route('works.update', $work->id), $updatedData);

        // Assert: Verify the work is updated
        $this->assertDatabaseHas('works', array_merge(['id' => $work->id], $updatedData));
        $response->assertRedirect(route('home', $work->id))->assertSessionHas('success', 'Work updated successfully!');
    }
}

