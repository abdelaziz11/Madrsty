<?php

use Carbon\Carbon;
use App\Model\Lecture;
use Illuminate\Database\Seeder;

class LecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecture = new Lecture();
        $lecture->name = 'Lecture one';
        $lecture->course_id = 1;
        $lecture->lecture_date = Carbon::now()->addHours(1);
        $lecture->day = $lecture->lecture_date->format('l');
        $lecture->time = $lecture->lecture_date->format('H:i');
        $lecture->meeting_name = 'reading';
        $lecture->meeting_password = '123';
        $lecture->meeting_id = '123';
        $lecture->save();

    }
}
