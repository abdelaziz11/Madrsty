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
});

Route::group(['prefix' => 'student'], function () {
    Route::get('/home', 'Student\StudentController@home')->name('students.home');
});


Route::group(['middleware' => 'auth:student'], function () {
    Route::get('/home', 'Student\StudentController@home')->name('students.home');
});


