<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Fiction',
        ]);
        Category::create([
            'name' => 'Action',
        ]);
        Category::create([
            'name' => 'Adventure',
        ]);
        Category::create([
            'name' => 'Romance',
        ]);
        Category::create([
            'name' => 'Drama',
        ]);
        Category::create([
            'name' => 'American',
        ]);
        Category::create([
            'name' => 'Slow',
        ]);
        Category::create([
            'name' => 'Comedy',
        ]);
        Category::create([
            'name' => 'Funny',
        ]);
        Category::create([
            'name' => 'Cool',
        ]);
    }
}
