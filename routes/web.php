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

Route::group(['prefix' => 'teacher'], function () {
    Route::get('/login', 'User\UserController@login_form')->name('teachers.login-form');
    Route::post('/login', 'User\UserController@login')->name('teachers.login');
    Route::get('/home', 'Teacher\TeacherController@home')->name('teachers.home');
});

Route::group(['prefix' => 'student'], function () {
    Route::get('/login', 'Student\LoginController@login_form')->name('students.login-form');
    Route::post('/login', 'Student\LoginController@login')->name('students.login');
    Route::get('/home', 'Student\StudentController@home')->name('students.home');
});


//this routes group will be available only for the admin
Route::group(['prefix' => 'admin', 'middleware' => 'authAdmin'], function () {
    
    Route::resource('/grades', 'Grade\GradeController');
    Route::group(['prefix' => 'grades'], function () {
        Route::get('/{grade}/subjects', 'Grade\GradeController@grade_subjects')->name('grade.subjects');
        Route::get('/{grade}/students', 'Grade\GradeController@grade_students')->name('grade.students');
        Route::get('/{grade}/lectures', 'Grade\GradeController@grade_lectures')->name('grade.lectures');
        Route::get('/{grade}/subjects/{subject}/lectures', 'Grade\GradeController@grade_subject_lectures')->name('grade.subject.lectures');
        
    });

    Route::group(['prefix' => 'teachers'], function () {
        Route::get('/', 'Teacher\TeacherController@index')->name('teachers.index');
        Route::get('/register', 'Teacher\RegisterController@register_form')->name('teachers.register-form');
        Route::post('/register', 'Teacher\RegisterController@register')->name('teachers.register');
        Route::get('/{teacher}', 'Teacher\TeacherController@show')->name('teachers.show');
        Route::get('/{teacher}/edit', 'Teacher\TeacherController@edit')->name('teachers.edit');
        Route::put('/{teacher}/edit', 'Teacher\TeacherController@update')->name('teachers.update');
        Route::delete('/{teacher}', 'Teacher\TeacherController@destroy')->name('teachers.destroy');
    });

    Route::group(['prefix' => 'students'], function() {
        Route::get('/', 'Student\StudentController@index')->name('students.index');
        Route::get('/register', 'Student\RegisterController@register_form')->name('students.register-form');
        Route::post('/register', 'Student\RegisterController@register')->name('students.register');
        Route::get('/{student}', 'Student\StudentController@show')->name('students.show');
        Route::get('/{student}/edit', 'Student\StudentController@edit')->name('students.edit');
        Route::put('/{student}/edit', 'Student\StudentController@update')->name('students.update');
        Route::delete('/{student}', 'Student\StudentController@destroy')->name('students.destroy');
    });

    Route::resource('/subjects', 'Subject\SubjectController');
    Route::resource('/lectures', 'Lecture\LectureController');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
