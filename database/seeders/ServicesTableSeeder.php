<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title' => 'Handyman',
            'description' => 'Hire a Tasker for help around the house',
            'image_url' => 'path/to/handyman-image.jpg',
        ]);
        // Add more services as needed
        
    }
}
