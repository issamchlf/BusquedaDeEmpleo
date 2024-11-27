<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Application;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
            //'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);
        Application::factory()->create([
            'job_title' => 'Acountant',
            'Category' => 'Buisness',
            'status' => 'Requested',
        ]);
        Application::factory()->create([
            'job_title' => 'Acountant',
            'Category' => 'Buisness',
            'status' => 'Requested',
        ]);
        Application::factory()->create([
            'job_title' => 'Acountant',
            'Category' => 'Buisness',
            'status' => 'Requested',
        ]);
    }
    
}
