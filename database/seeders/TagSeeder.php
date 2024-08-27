<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tags::create([
            'name' => 'loker',
            'slug' => 'loker',
        ]);

        Tags::create([
            'name' => 'Bisnis',
            'slug' => 'bisnis',
        ]);

        Tags::create([
            'name' => 'Akuntansi',
            'slug' => 'akuntansi',
        ]);
    }
}
