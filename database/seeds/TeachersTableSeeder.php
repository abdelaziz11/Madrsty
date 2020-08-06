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
        $teacher->phone_number = '01119119255';
        $teacher->description = 'Welcome to me';
        $teacher->photo = 'https://firebasestorage.googleapis.com/v0/b/laravel-firebase-39c14.appspot.com/o/profile.jpg?alt=media&token=61109afd-7996-4e79-bc56-f219139d5241';
        $teacher->password = Hash::make('s');
        $teacher->subject_id = 1;
        $teacher->save();

        $teacher2 = new Teacher();
        $teacher2->name = 'Sherif';
        $teacher2->email = 'Sherif@example.com';
        $teacher2->phone_number = '01119119255';
        $teacher2->photo = 'https://firebasestorage.googleapis.com/v0/b/laravel-firebase-39c14.appspot.com/o/profile.jpg?alt=media&token=61109afd-7996-4e79-bc56-f219139d5241';
        $teacher2->description = 'Welcome to me';
        $teacher2->password = Hash::make('s');
        $teacher2->subject_id = 2;
        $teacher2->save();

        $teacher3 = new Teacher();
        $teacher3->name = 'Khalid';
        $teacher3->email = 'Khalid@example.com';
        $teacher3->phone_number = '01119119255';
        $teacher3->description = 'Welcome to me';
        $teacher3->photo = 'https://firebasestorage.googleapis.com/v0/b/laravel-firebase-39c14.appspot.com/o/profile.jpg?alt=media&token=61109afd-7996-4e79-bc56-f219139d5241';
        $teacher3->password = Hash::make('k');
        $teacher3->subject_id = 3;
        $teacher3->save();

        $teacher4 = new Teacher();
        $teacher4->name = 'Ahmed';
        $teacher4->email = 'Ahmed@example.com';
        $teacher4->phone_number = '01119119255';
        $teacher4->description = 'Welcome to me';
        $teacher4->photo = 'https://firebasestorage.googleapis.com/v0/b/laravel-firebase-39c14.appspot.com/o/profile.jpg?alt=media&token=61109afd-7996-4e79-bc56-f219139d5241';
        $teacher4->password = Hash::make('a');
        $teacher4->subject_id = 4;
        $teacher4->save();

    }
}
