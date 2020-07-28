<?php

use App\Model\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = new Question();
        $question->title = 'what is course one?';
        $question->course_id = 1;
        $question->student_id = 1;
        $question->save();

        $question2 = new Question();
        $question2->title = 'what is course two?';
        $question2->course_id = 2;
        $question2->student_id = 1;
        $question2->save();

        $question3 = new Question();
        $question3->title = 'what is course three?';
        $question3->course_id = 3;
        $question3->student_id = 1;

        $question3->save();

        $question4 = new Question();
        $question4->title = 'what is course four?';
        $question4->course_id = 4;
        $question4->student_id = 1;

        $question4->save();

        $question5 = new Question();
        $question5->title = 'what is course one again?';
        $question5->course_id = 1;
        $question5->student_id = 1;

        $question5->save();

        $question6 = new Question();
        $question6->title = 'what is course two again?';
        $question6->course_id = 2;
        $question6->student_id = 1;

        $question6->save();



    }
}
