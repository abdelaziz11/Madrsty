<?php

use App\Model\Answer;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answer = new Answer();
        $answer->body = 'this is the answer';
        $answer->question_id = 1;
        $answer->teacher_id = 1;
        $answer->student_id = null;
        $answer->save();
        
        $answer2 = new Answer();
        $answer2->body = 'this is the answer';
        $answer2->question_id = 1;
        $answer2->student_id = 1;
        $answer2->teacher_id = null;
        $answer2->save();

        $answer3 = new Answer();
        $answer3->body = 'this is the answer';
        $answer3->question_id = 2;
        $answer3->teacher_id = 1;
        $answer3->student_id = null;
        $answer3->save();

        $answer4 = new Answer();
        $answer4->body = 'this is the answer';
        $answer4->question_id = 2;
        $answer4->teacher_id = 1;
        $answer4->student_id = null;
        $answer4->save();

        $answer5 = new Answer();
        $answer5->body = 'this is the answer';
        $answer5->question_id = 3;
        $answer5->teacher_id = 1;
        $answer5->student_id = null;
        $answer5->save();

        $answer6 = new Answer();
        $answer6->body = 'this is the answer';
        $answer6->question_id = 4;
        $answer6->teacher_id = null;
        $answer6->student_id = 4;
        $answer6->save();
    }
}
