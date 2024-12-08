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
        $work =Work::factory()->create([
            'job_title' => 'Acountant',
            'category' => 'Buisness',
            'status' => 'Requested',
        ]);
        $work =Work::factory()->create([
            'job_title' => 'Acountant',
            'category' => 'Buisness',
            'status' => 'Requested',
        ]);
        $work = Work::factory()->create([
            'job_title' => 'Acountant',
            'category' => 'Buisness',
            'status' => 'Requested',
        ]);
        $work =Detail::create([
            'work_id' => $work->id, 
            'company_name' => 'Tech Corp',
            'location' => 'San Francisco',
            'comment' => 'An exciting opportunity in a dynamic team.',
            'salary' => 120000,
            'URL' => 'ddddd.com'
        ]);
        $work =Detail::create([
            'work_id' => $work->id, 
            'company_name' => 'amazon',
            'location' => 'malaga',
            'comment' => 'An exciting opportunity in a dynamic team.',
            'salary' => 120000,
            'URL' => 'hola.com'
        ]);
        $work =Detail::create([
            'work_id' => $work->id, 
            'company_name' => 'mmmm',
            'location' => 'malaga',
            'comment' => 'An exciting opportunity in a dynamic team.',
            'salary' => 120000,
            'URL' => 'hola.com'
        ]);


    }
    
}
