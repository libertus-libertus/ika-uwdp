<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Enterprenuer',
            'slug' => 'enterpreneur'
        ]);

        Category::create([
            'name' => 'Pengumuman',
            'slug' => 'pengumuman'
        ]);

        Category::create([
            'name' => 'Lowongan Pekerjaan',
            'slug' => 'lowongan-pekerjaan'
        ]);
    }
}
