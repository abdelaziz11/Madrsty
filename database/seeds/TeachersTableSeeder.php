<?php

use Hash as Hash;
use App\Model\Teacher;
use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = new Teacher();
        $teacher->name = 'Selim';
        $teacher->email = 'Selim@example.com';
        $teacher->password = Hash::make('s');
        $teacher->subject_id = 1;
        $teacher->save();

        $teacher2 = new Teacher();
        $teacher2->name = 'Sherif';
        $teacher2->email = 'Sherif@example.com';
        $teacher2->password = Hash::make('s');
        $teacher2->subject_id = 2;
        $teacher2->save();

        $teacher3 = new Teacher();
        $teacher3->name = 'Khalid';
        $teacher3->email = 'Khalid@example.com';
        $teacher3->password = Hash::make('k');
        $teacher3->subject_id = 3;
        $teacher3->save();

        $teacher4 = new Teacher();
        $teacher4->name = 'Ahmed';
        $teacher4->email = 'Ahmed@example.com';
        $teacher4->password = Hash::make('a');
        $teacher4->subject_id = 4;
        $teacher4->save();

    }
}
