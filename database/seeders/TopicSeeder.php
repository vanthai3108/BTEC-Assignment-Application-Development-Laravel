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
        // Topic::create(['name' => 'Php Basic', 'description' => 'This is php topic', 'course_id' => 1, 'user_id' => 8]);
        // Topic::create(['name' => 'Html', 'description' => 'This is html topic', 'course_id' => 1, 'user_id' => 7]);
        // Topic::create(['name' => 'CSS', 'description' => 'This is css topic', 'course_id' => 1, 'user_id' => 7]);
        // Topic::create(['name' => 'Javascript', 'description' => 'This is js topic', 'user_id' => 7]);
        // Topic::create(['name' => 'MVC Model', 'description' => 'This is mvc model topic', 'course_id' => 2, 'user_id' => 8]);
        // Topic::create(['name' => 'Laravel Basic', 'description' => 'This is laravel topic', 'course_id' => 2, 'user_id' => 8]);
        // Topic::create(['name' => 'Python Basic', 'description' => 'This is python topic', 'course_id' => 3]);
        // Topic::create(['name' => 'Data analysic', 'description' => 'This is python topic', 'course_id' => 3, 'user_id' => 7]);
        // Topic::create(['name' => 'C# Basic', 'description' => 'This is C# topic', 'course_id' => 4, 'user_id' => 7]);
        // Topic::create(['name' => 'Data structure', 'description' => 'This is data structure topic', 'course_id' => 4, 'user_id' => 7]);
        // Topic::create(['name' => 'C++', 'description' => 'This is C++ topic', 'course_id' => 5, 'user_id' => 7]);
        // Topic::create(['name' => 'Arduino', 'description' => 'This is arduino topic', 'course_id' => 5, 'user_id' => 7]);
        // Topic::create(['name' => 'Brand design', 'description' => 'This is brand design topic', 'course_id' => 6, 'user_id' => 6]);
        // Topic::create(['name' => 'Interior architecture', 'description' => 'This is interior architecturen topic', 'course_id' => 7, 'user_id' => 6]);
        // Topic::create(['name' => 'Planning', 'description' => 'This is planning topic', 'course_id' => 8, 'user_id' => 6]);
        // Topic::create(['name' => 'Social media', 'description' => 'This is social media topic', 'course_id' => 8]);

        // heroku
        Topic::create(['name' => 'Php Basic', 'description' => 'This is php topic', 'course_id' => 5, 'user_id' => 65]);
        Topic::create(['name' => 'Html', 'description' => 'This is html topic', 'course_id' => 5, 'user_id' => 65]);
        Topic::create(['name' => 'CSS', 'description' => 'This is css topic', 'course_id' => 5, 'user_id' => 65]);
        Topic::create(['name' => 'Javascript', 'description' => 'This is js topic', 'user_id' => 65]);
        Topic::create(['name' => 'MVC Model', 'description' => 'This is mvc model topic', 'course_id' => 15, 'user_id' => 75]);
        Topic::create(['name' => 'Laravel Basic', 'description' => 'This is laravel topic', 'course_id' => 15, 'user_id' => 75]);
        Topic::create(['name' => 'Python Basic', 'description' => 'This is python topic', 'course_id' => 25]);
        Topic::create(['name' => 'Data analysic', 'description' => 'This is python topic', 'course_id' => 25, 'user_id' => 65]);
        Topic::create(['name' => 'C# Basic', 'description' => 'This is C# topic', 'course_id' => 35, 'user_id' => 65]);
        Topic::create(['name' => 'Data structure', 'description' => 'This is data structure topic', 'course_id' => 35, 'user_id' => 65]);
        Topic::create(['name' => 'C++', 'description' => 'This is C++ topic', 'course_id' => 45, 'user_id' => 65]);
        Topic::create(['name' => 'Arduino', 'description' => 'This is arduino topic', 'course_id' => 45, 'user_id' => 65]);
        Topic::create(['name' => 'Brand design', 'description' => 'This is brand design topic', 'course_id' => 55, 'user_id' => 55]);
        Topic::create(['name' => 'Interior architecture', 'description' => 'This is interior architecturen topic', 'course_id' => 65, 'user_id' => 55]);
        Topic::create(['name' => 'Planning', 'description' => 'This is planning topic', 'course_id' => 75, 'user_id' => 55]);
        Topic::create(['name' => 'Social media', 'description' => 'This is social media topic', 'course_id' => 75]);
    }
}
