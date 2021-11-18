<?php

namespace Database\Seeders;

use App\Models\Course;
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
        Topic::create(['name' => 'Topic 1', 'description' => 'This is topic 1', 'course_id' => 1, 'user_id' => 8]);
        Topic::create(['name' => 'Topic 2', 'description' => 'This is topic 2']);
        Topic::create(['name' => 'Topic 3', 'description' => 'This is topic 3', 'course_id' => 1, 'user_id' => 6]);
        Topic::create(['name' => 'Topic 4', 'description' => 'This is topic 4', 'user_id' => 7]);
        Topic::create(['name' => 'Topic 5', 'description' => 'This is topic 5', 'course_id' => 2]);
        Topic::create(['name' => 'Topic 6', 'description' => 'This is topic 6', 'course_id' => 3, 'user_id' => 6]);
        Topic::create(['name' => 'Topic 7', 'description' => 'This is topic 7', 'course_id' => 3, 'user_id' => 8]);
        Topic::create(['name' => 'Topic 8', 'description' => 'This is topic 8', 'course_id' => 1, 'user_id' => 7]);
    }
}
