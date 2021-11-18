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
            'image' => 'storage/courses/course1.png', 
            'numberOfSessions' => 30, 
            'shift' => 1, 
            'startDate' => '2020/12/11', 
            'endDate' => '2021/02/11',
            'category_id' => 2,
        ]);
        $course->users()->attach([9,10,11]);
        $course = Course::create([
            'name' => 'khoa hoc 2',
            'description' => 'this is course 2', 
            'image' => 'storage/courses/course2.png', 
            'numberOfSessions' => 15, 
            'shift' => 2, 
            'startDate' => '2020/12/25', 
            'endDate' => '2020/01/25',
            'category_id' => 4,
        ]);
        $course->users()->attach([10,11, 13]);
        $course = Course::create([
            'name' => 'khoa hoc 3',
            'description' => 'this is course 3', 
            'image' => 'storage/courses/course3.png', 
            'numberOfSessions' => 15, 
            'shift' => 3, 
            'startDate' => '2020/12/17', 
            'endDate' => '2020/3/17',
            'category_id' => 4,
        ]);
        $course->users()->attach([10, 13]);
    }
}
