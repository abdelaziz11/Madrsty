<?php

use App\Model\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new Course();
        $course->name = 'Arabic Course';
        $course->teacher_id = 1;
        $course->grade_id = 1;
        $course->save();
        $course->students()->attach([
            'student_id' => 1
        ]);

        $course2 = new Course();
        $course2->name = 'Math Course';
        $course2->teacher_id = 2;
        $course2->grade_id = 1;
        $course2->save();
        $course2->students()->attach([
            'student_id' => 2
        ]);
        $course2->students()->attach([
            'student_id' => 1
        ]);

        $course3 = new Course();
        $course3->name = 'English Course';
        $course3->teacher_id = 3;
        $course3->grade_id = 1;
        $course3->save();
        $course3->students()->attach([
            'student_id' => 3
        ]);

        $course4 = new Course();
        $course4->name = 'French Course';
        $course4->teacher_id = 4;
        $course4->grade_id = 1;
        $course4->save();
        $course4->students()->attach([
            'student_id' => 4
        ]);

    }
}
