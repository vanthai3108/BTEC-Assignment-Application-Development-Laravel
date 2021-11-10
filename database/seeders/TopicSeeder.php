<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create(['name' => 'Topic 1']);
        Topic::create(['name' => 'Topic 2']);
        Topic::create(['name' => 'Topic 3']);
        Topic::create(['name' => 'Topic 4']);
        Topic::create(['name' => 'Topic 5']);
        Topic::create(['name' => 'Topic 6']);
        Topic::create(['name' => 'Topic 7']);
        Topic::create(['name' => 'Topic 8']);

    }
}
