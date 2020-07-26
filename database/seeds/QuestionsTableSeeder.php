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
        $question->body = 'question body';
        $question->course_id = 1;
        $question->save();

        $question2 = new Question();
        $question2->title = 'what is course two?';
        $question2->body = 'question body';
        $question2->course_id = 2;
        $question2->save();

        $question3 = new Question();
        $question3->title = 'what is course three?';
        $question3->body = 'question body';
        $question3->course_id = 3;
        $question3->save();

        $question4 = new Question();
        $question4->title = 'what is course four?';
        $question4->body = 'question body';
        $question4->course_id = 4;
        $question4->save();

        $question5 = new Question();
        $question5->title = 'what is course one again?';
        $question5->body = 'question body';
        $question5->course_id = 1;
        $question5->save();

        $question6 = new Question();
        $question6->title = 'what is course two again?';
        $question6->body = 'question body';
        $question6->course_id = 2;
        $question6->save();

        $question5 = new Question();
        $question5->title = 'what is course three again?';
        $question5->body = 'question body';
        $question5->course_id = 3;
        $question5->save();

    }
}
