<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Work;
use App\Models\offer;
use App\Models\Detail;
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
        Work::factory()->create([
            'job_title' => 'Acountant',
            'category' => 'Buisness',
            'status' => 'Requested',
        ]);
        Work::factory()->create([
            'job_title' => 'Acountant',
            'category' => 'Buisness',
            'status' => 'Requested',
        ]);
        Work::factory()->create([
            'job_title' => 'Acountant',
            'category' => 'Buisness',
            'status' => 'Requested',
        ]);
        Work::factory(10)->create();
    }
    
}
