<?php

use App\Model\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = new Subject();
        $subject->name = 'Arabic';
        $subject->save();

        $subject2 = new Subject();
        $subject2->name = 'Math';
        $subject2->save();

        $subject3 = new Subject();
        $subject3->name = 'English';
        $subject3->save();

        $subject4 = new Subject();
        $subject4->name = 'French';
        $subject4->save();

        $subject5 = new Subject();
        $subject5->name = 'Science';
        $subject5->save();
    }
}
