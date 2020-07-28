<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'teacher', 'middleware' => 'auth:teacher'], function () {
    Route::get('/home', 'Teacher\TeacherController@home')->name('teachers.home');
    Route::get('/{teacher}/courses', 'Teacher\TeacherController@teacher_courses')->name('teachers.courses');
    Route::get('/{teacher}/courses/{course}/lectures', 'Teacher\TeacherController@teacher_course_lectures')->name('teacher.course.lectures');
    Route::post('/{teacher}/courses/{course}/lectures/add-new-lectures', 'Teacher\TeacherController@add_new_lecture')->name('teacher.create-lecture');
    Route::get('/{teacher}/courses/{course}/questions', 'Teacher\TeacherController@get_course_questions')->name('teacher.course.questions');
    Route::post('/{teacher}/courses/{course}/questions/{question}/add-answer', 'Answer\AnswerController@store')->name('answer.store');

    //routing to profile method in TaacherController to get teacher data and his own courses
    Route::get('/profile', 'Teacher\TeacherController@profile')->name('teachers.profile');
});

Route::group(['prefix' => 'student'], function () {
    Route::get('/home', 'Student\StudentController@home')->name('students.home');
});


Route::group(['middleware' => 'auth:student'], function () {
    Route::get('/home', 'Student\StudentController@home')->name('students.home');
});


