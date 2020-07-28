<?php

use App\Model\Student;
use Hash as Hash;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student();
        $student->name = 'Ahmed';
        $student->email = 'Ahmed@example.com';
        $student->phone_number = '01119119255';
        $student->password = Hash::make('a');
        $student->grade_id = 1;
        $student->save();

        $student2 = new Student();
        $student2->name = 'Mohamed';
        $student2->email = 'Mohamed@example.com';
        $student2->phone_number = '01119119255';
        $student2->password = Hash::make('m');
        $student2->grade_id = 1;
        $student2->save();

        $student3 = new Student();
        $student3->name = 'Hassan';
        $student3->email = 'Hassan@example.com';
        $student3->phone_number = '01119119255';
        $student3->password = Hash::make('h');
        $student3->grade_id = 2;
        $student3->save();

        $student4 = new Student();
        $student4->name = 'Hossam';
        $student4->email = 'Hossam@example.com';
        $student4->phone_number = '01119119255';
        $student4->password = Hash::make('h');
        $student4->grade_id = 2;
        $student4->save();

        $student5 = new Student();
        $student5->name = 'Andrew';
        $student5->email = 'Andrew@example.com';
        $student5->phone_number = '01119119255';
        $student5->password = Hash::make('a');
        $student5->grade_id = 3;
        $student5->save();

        $student6 = new Student();
        $student6->name = 'Tarek';
        $student6->email = 'Tarek@example.com';
        $student6->phone_number = '01119119255';
        $student6->password = Hash::make('t');
        $student6->grade_id = 4;
        $student6->save();

        $student7 = new Student();
        $student7->name = 'Belal';
        $student7->email = 'Belal@example.com';
        $student7->phone_number = '01119119255';
        $student7->password = Hash::make('b');
        $student7->grade_id = 5;
        $student7->save();
    }
}
