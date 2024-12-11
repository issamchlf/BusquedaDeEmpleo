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
        // Work Example 1
$work = Work::factory()->create([
    'job_title' => 'Software Engineer',
    'category' => 'Technology',
    'status' => 'In progress',
]);

Detail::create([
    'work_id' => $work->id,
    'company_name' => 'Google',
    'location' => 'Mountain View, CA',
    'comment' => 'An opportunity to work on cutting-edge AI technologies.',
    'salary' => 150000,
    'URL' => 'google.com',
]);

// Work Example 2
$work = Work::factory()->create([
    'job_title' => 'Marketing Manager',
    'category' => 'Marketing',
    'status' => 'Active',
]);

Detail::create([
    'work_id' => $work->id,
    'company_name' => 'Apple',
    'location' => 'Cupertino, CA',
    'comment' => 'Lead the marketing campaigns for innovative products.',
    'salary' => 140000,
    'URL' => 'apple.com',
]);

// Work Example 3
$work = Work::factory()->create([
    'job_title' => 'Graphic Designer',
    'category' => 'Creative',
    'status' => 'In progress',
]);

Detail::create([
    'work_id' => $work->id,
    'company_name' => 'Adobe',
    'location' => 'San Jose, CA',
    'comment' => 'Design impactful visuals for industry-leading creative software.',
    'salary' => 95000,
    'URL' => 'adobe.com',
]);

// Work Example 4
$work = Work::factory()->create([
    'job_title' => 'Data Scientist',
    'category' => 'Technology',
    'status' => 'Active',
]);

Detail::create([
    'work_id' => $work->id,
    'company_name' => 'Meta',
    'location' => 'Menlo Park, CA',
    'comment' => 'Analyze data to create impactful social media experiences.',
    'salary' => 135000,
    'URL' => 'meta.com',
]);

// Work Example 5
$work = Work::factory()->create([
    'job_title' => 'Project Manager',
    'category' => 'Management',
    'status' => 'Closed',
]);

Detail::create([
    'work_id' => $work->id,
    'company_name' => 'Microsoft',
    'location' => 'Redmond, WA',
    'comment' => 'Manage diverse projects across technology teams.',
    'salary' => 125000,
    'URL' => 'microsoft.com',
]);

// Work Example 6
$work = Work::factory()->create([
    'job_title' => 'HR Specialist',
    'category' => 'Human Resources',
    'status' => 'In progress',
]);

Detail::create([
    'work_id' => $work->id,
    'company_name' => 'Netflix',
    'location' => 'Los Angeles, CA',
    'comment' => 'Recruit and retain talent for world-class entertainment teams.',
    'salary' => 110000,
    'URL' => 'netflix.com',
]);

// Work Example 7
$work = Work::factory()->create([
    'job_title' => 'DevOps Engineer',
    'category' => 'Technology',
    'status' => 'In progress',
]);

Detail::create([
    'work_id' => $work->id,
    'company_name' => 'Tesla',
    'location' => 'Palo Alto, CA',
    'comment' => 'Enhance deployment pipelines for electric vehicle software.',
    'salary' => 140000,
    'URL' => 'tesla.com',
]);

// Work Example 8
$work = Work::factory()->create([
    'job_title' => 'Content Writer',
    'category' => 'Content',
    'status' => 'In progress',
]);

Detail::create([
    'work_id' => $work->id,
    'company_name' => 'Spotify',
    'location' => 'Stockholm, Sweden',
    'comment' => 'Craft engaging content for global music streaming audiences.',
    'salary' => 75000,
    'URL' => 'spotify.com',
]);

// Work Example 9
$work = Work::factory()->create([
    'job_title' => 'Customer Support Specialist',
    'category' => 'Service',
    'status' => 'In progress',
]);

Detail::create([
    'work_id' => $work->id,
    'company_name' => 'Amazon',
    'location' => 'Seattle, WA',
    'comment' => 'Provide exceptional support for e-commerce customers worldwide.',
    'salary' => 60000,
    'URL' => 'amazon.com',
]);

// Work Example 10
$work = Work::factory()->create([
    'job_title' => 'Game Developer',
    'category' => 'Gaming',
    'status' => 'Closed',
]);

Detail::create([
    'work_id' => $work->id,
    'company_name' => 'Ubisoft',
    'location' => 'Montreal, Canada',
    'comment' => 'Develop innovative gameplay mechanics for AAA titles.',
    'salary' => 85000,
    'URL' => 'ubisoft.com',
]);


    }
    
}
