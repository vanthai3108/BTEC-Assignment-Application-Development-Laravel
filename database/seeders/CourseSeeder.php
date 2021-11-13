<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::create([
            'name' => 'khoa hoc 1',
            'description' => 'this is course 1', 
            'image' => 'img1', 
            'numberOfSessions' => 30, 
            'shift' => 1, 
            'startDate' => '2020/10/11', 
            'endDate' => '2020/10/11',
            'category_id' => 2,
        ]);
        $course->users()->attach([8,10,11]);
        $course = Course::create([
            'name' => 'khoa hoc 2',
            'description' => 'this is course 2', 
            'image' => 'img2', 
            'numberOfSessions' => 15, 
            'shift' => 2, 
            'startDate' => '2020/10/12', 
            'endDate' => '2020/10/12',
            'category_id' => 4,
        ]);
        $course->users()->attach([10,11, 13]);
        $course = Course::create([
            'name' => 'khoa hoc 3',
            'description' => 'this is course 3', 
            'image' => 'img3', 
            'numberOfSessions' => 15, 
            'shift' => 3, 
            'startDate' => '2020/10/12', 
            'endDate' => '2020/10/12',
            'category_id' => 4,
        ]);
        $course->users()->attach([10, 13]);
    }
}
