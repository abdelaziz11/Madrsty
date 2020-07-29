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
    Route::get('/home', 'Teacher\TeacherController@profile')->name('teachers.home');
    Route::get('/{teacher}/courses', 'Teacher\TeacherController@teacher_courses')->name('teachers.courses');
    Route::get('/{teacher}/add-new-course', 'Teacher\TeacherController@add_new_course')->name('teacher.course.create');
    Route::post('/{teacher}/add-new-course', 'Teacher\TeacherController@store_new_course')->name('teacher.course.store');
    Route::get('/{teacher}/courses/{course}/students', 'Course\CourseController@course_Students')->name('teacher.course.students');
    Route::get('/{teacher}/courses/{course}/lectures', 'Teacher\TeacherController@teacher_course_lectures')->name('teacher.course.lectures');
    Route::post('/{teacher}/courses/{course}/lectures/add-new-lectures', 'Teacher\TeacherController@add_new_lecture')->name('teacher.create-lecture');
    Route::get('/{teacher}/courses/{course}/questions', 'Teacher\TeacherController@get_course_questions')->name('teacher.course.questions');
    Route::post('/{teacher}/courses/{course}/questions/{question}/add-answer', 'Answer\AnswerController@store')->name('answer.store');
    Route::get('/{teacher}/courses/{course}/questions/{question}/all-answers', 'Answer\AnswerController@all_question_answers')->name('question.answers');

    //routing to profile method in TaacherController to get teacher data and his own courses
    Route::get('/profile', 'Teacher\TeacherController@profile')->name('teachers.profile');

    // teacher add new material to his course
    Route::post('/addMaterial', 'Course\CourseController@addMaterial')->name('teachers.addMaterial');

    //routing to method show students assigned to current course
    Route::get('/courseStudents/{id}', 'Course\CourseController@courseStudents')->name('teachers.courseStudents');

    //routing to method show all materails of current course
    Route::get('/courseMaterials/{id}', 'Course\CourseController@courseMaterials')->name('teachers.courseMaterials');

    //routing to method show student's questions and answers on current course only
    Route::get('/studentQuestions/{course_id}/{student_id}', 'Student\StudentController@studentQuestions')->name('teachers.studentQuestions');

});

Route::group(['prefix' => 'student'], function () {
    Route::get('/home', 'Student\StudentController@home')->name('students.home');
});


Route::group(['middleware' => 'auth:student'], function () {
    Route::get('/home', 'Student\StudentController@home')->name('students.home');
});


