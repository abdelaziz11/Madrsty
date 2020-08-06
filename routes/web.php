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
Route::get('/login', 'Auth\LoginController@show')->name('login')->middleware('guest');



// Register & Login User
Route::post('/login', 'Auth\LoginController@login');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'teacher', 'middleware' => 'auth:teacher'], function () {
    
    Route::get('/schedule','Teacher\TeacherController@show_schedule')->name('teachers.schedule');

    

    Route::get('/home', 'Teacher\TeacherController@profile')->name('teachers.home');
    Route::get('/balance', function(){
        return view('Teachers.balance');
    });


    Route::get('/courses', 'Teacher\TeacherController@teacher_courses')->name('teachers.courses');

    Route::get('/add-new-course', 'Teacher\TeacherController@add_new_course')->name('teacher.course.create');

    Route::post('/add-new-course', 'Teacher\TeacherController@store_new_course')->name('teacher.course.store');

    Route::get('/courses/{course}/students', 'Course\CourseController@course_Students')->name('teacher.course.students');

    Route::get('/courses/{course}/lectures', 'Teacher\TeacherController@teacher_course_lectures')->name('teacher.course.lectures');

    Route::post('/courses/{course}/lectures/add-new-lectures', 'Teacher\TeacherController@add_new_lecture')->name('teacher.create-lecture');

    Route::get('/courses/{course}/questions', 'Teacher\TeacherController@get_course_questions')->name('teacher.course.questions');

    Route::post('/courses/questions/{question}/add-answer', 'Answer\AnswerController@store')->name('answer.store');

    Route::get('/courses/questions/{question}/all-answers', 'Answer\AnswerController@all_question_answers')->name('question.answers');

    //routing to profile method in TaacherController to get teacher data and his own courses
    Route::get('/profile', 'Teacher\TeacherController@profile')->name('teachers.profile');

    // teacher add new material to his course
    Route::post('/addMaterial', 'Course\CourseController@addMaterial')->name('teachers.addMaterial');
    
    Route::post('/joinMeeting', 'Teacher\TeacherController@joinMeeting');

    //routing to method show students assigned to current course
    Route::get('/courseStudents/{id}', 'Course\CourseController@courseStudents')->name('teachers.courseStudents');

    //routing to method show all materails of current course
    Route::get('/courseMaterials/{id}', 'Course\CourseController@courseMaterials')->name('teachers.courseMaterials');

    //routing to method show student's questions and answers on current course only
    Route::get('/studentQuestions/{course_id}/{student_id}', 'Student\StudentController@studentQuestions')->name('teachers.studentQuestions');

    Route::get('/live/{meeting_id}/{meeting_password}', function ($meeting_id,$meeting_password) {
        return view('zoom.meeting',compact('meeting_id','meeting_password'));
    })->name('zoom');
    });

Route::group(['prefix' => 'student'], function () {
    Route::get('/home', 'Student\StudentController@home')->name('students.home');
});


Route::group(['middleware' => 'auth:student'], function () {
    Route::get('/home', 'Student\StudentController@home')->name('students.home');
});


