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
        $answer->save();
        
        $answer2 = new Answer();
        $answer2->body = 'this is the answer';
        $answer2->question_id = 1;
        $answer2->save();

        $answer3 = new Answer();
        $answer3->body = 'this is the answer';
        $answer3->question_id = 2;
        $answer3->save();

        $answer4 = new Answer();
        $answer4->body = 'this is the answer';
        $answer4->question_id = 2;
        $answer4->save();

        $answer4 = new Answer();
        $answer4->body = 'this is the answer';
        $answer4->question_id = 3;
        $answer4->save();

        $answer4 = new Answer();
        $answer4->body = 'this is the answer';
        $answer4->question_id = 4;
        $answer4->save();
    }
}
