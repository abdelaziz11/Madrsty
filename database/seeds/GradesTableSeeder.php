<?php

use App\Model\Grade;
use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grade = new Grade();
        $grade->name = 'Grade 1';
        $grade->save();

        $grade2 = new Grade();
        $grade2->name = 'Grade 2';
        $grade2->save();

        $grade3 = new Grade();
        $grade3->name = 'Grade 3';
        $grade3->save();

        $grade4 = new Grade();
        $grade4->name = 'Grade 4';
        $grade4->save();

        $grade5 = new Grade();
        $grade5->name = 'Grade 5';
        $grade5->save();
    }
}
