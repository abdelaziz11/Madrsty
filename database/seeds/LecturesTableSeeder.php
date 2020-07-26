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
        $lecture->save();

        $lecture2 = new Lecture();
        $lecture2->name = 'Lecture two';
        $lecture2->course_id = 1;
        $lecture2->lecture_date = Carbon::now()->addHours(1);
        $lecture2->save();

        $lecture3 = new Lecture();
        $lecture3->name = 'Lecture three';
        $lecture3->course_id = 2;
        $lecture3->lecture_date = Carbon::now()->addHours(1);
        $lecture3->save();

        $lecture4 = new Lecture();
        $lecture4->name = 'Lecture four';
        $lecture4->course_id = 2;
        $lecture4->lecture_date = Carbon::now()->addHours(1);
        $lecture4->save();

        $lecture5 = new Lecture();
        $lecture5->name = 'Lecture five';
        $lecture5->course_id = 3;
        $lecture5->lecture_date = Carbon::now()->addHours(1);
        $lecture5->save();

        $lecture6 = new Lecture();
        $lecture6->name = 'Lecture six';
        $lecture6->course_id = 4;
        $lecture6->lecture_date = Carbon::now()->addHours(1);
        $lecture6->save();
    }
}
