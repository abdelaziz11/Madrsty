<?php

use App\Model\CourseDetail;

use Illuminate\Database\Seeder;

class CourseDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course_details = new CourseDetail();
        $course_details->title = 'title one';
        $course_details->body = 'body one';
        $course_details->file_url = 'https://google.com';
        $course_details->course_id = 1;
        $course_details->save();

        $course_details2 = new CourseDetail();
        $course_details2->title = 'title two';
        $course_details2->body = 'body two';
        $course_details2->file_url = 'https://google.com';
        $course_details2->course_id = 2;
        $course_details2->save();

        $course_details3 = new CourseDetail();
        $course_details3->title = 'title three';
        $course_details3->body = 'body three';
        $course_details3->file_url = 'https://google.com';
        $course_details3->course_id = 3;
        $course_details3->save();

        $course_details4 = new CourseDetail();
        $course_details4->title = 'title four';
        $course_details4->body = 'body four';
        $course_details4->file_url = 'https://google.com';
        $course_details4->course_id = 4;
        $course_details4->save();
    }
}
