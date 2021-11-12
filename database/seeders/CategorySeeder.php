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
        Category::create(['name' => 'Category 1', 'description' => 'This is category 1']);
        Category::create(['name' => 'Category 2', 'description' => 'This is category 2']);
        Category::create(['name' => 'Category 3', 'description' => 'This is category 3']);
        Category::create(['name' => 'Category 4', 'description' => 'This is category 4']);
        Category::create(['name' => 'Category 5', 'description' => 'This is category 5']);
        Category::create(['name' => 'Category 6', 'description' => 'This is category 6']);
        Category::create(['name' => 'Category 7', 'description' => 'This is category 7']);
    }
}
