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
Route::post('/login', 'Auth\LoginController@login')->name('login');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'teacher', 'middleware' => 'auth:teacher'], function () {
    
    Route::get('/schedule','Teacher\TeacherController@show_schedule')->name('teachers.schedule');

    

    Route::get('/profile', 'Teacher\TeacherController@profile')->name('teachers.profile');
    // Route::get('/balance', function(){
    //     return view('Teachers.balance');
    // });


    Route::get('/courses', 'Teacher\TeacherController@teacher_courses')->name('teachers.courses');

    Route::get('/add-new-course', 'Teacher\TeacherController@add_new_course')->name('teacher.course.create');

    Route::post('/add-new-course', 'Teacher\TeacherController@store_new_course')->name('teacher.course.store');

    Route::get('/courses/{course}/students', 'Course\CourseController@course_Students')->name('teacher.course.students');

    Route::get('/courses/{course}/lectures', 'Teacher\TeacherController@teacher_course_lectures')->name('teacher.course.lectures');

    Route::post('/courses/{course}/lectures/add-new-lectures', 'Teacher\TeacherController@add_new_lecture')->name('teacher.create-lecture');

    Route::get('/courses/{course}/questions', 'Teacher\TeacherController@get_course_questions')->name('teacher.course.questions');

    Route::post('/courses/questions/{question}/add-answer', 'Teacher\TeacherController@add_answer')->name('answer.store');

    Route::get('/courses/questions/{question}/all-answers', 'Answer\AnswerController@all_question_answers')->name('question.answers');

    //routing to profile method in TaacherController to get teacher data and his own courses
    Route::get('/profile', 'Teacher\TeacherController@profile')->name('teachers.profile');

    Route::get('/get_schedule', 'Teacher\TeacherController@get_schedule');

    // teacher add new material to his course
    Route::post('/addMaterial', 'Course\CourseController@addMaterial')->name('teachers.addMaterial');
    
    Route::post('/joinMeeting', 'Teacher\TeacherController@joinMeeting');

    Route::post('/editDescription', 'Teacher\TeacherController@editDescription');

    Route::post('/changePhoto', 'Teacher\TeacherController@changePhoto');

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



// Route::group(['prefix' => 'students', 'middleware' => 'auth:student'], function () {
//     Route::get('/home', 'Student\StudentController@home')->name('students.home');
//     Route::get('/home', 'Student\StudentController@home')->name('students.home');
// });


Route::group(['prefix' => 'student','middleware' => ['auth:student']], function () {

    Route::get('/home', 'Student\StudentController@profile')->name('student.home');
    Route::get('/courses', 'Student\StudentController@courses')->name('student.courses');
    Route::get('/courses/{course}/materials', 'Student\StudentController@course_materials')->name('student.course.materials');
    Route::get('/courses/{course}/questions', 'Student\StudentController@course_questions')->name('student.course.questions');
    Route::post('/courses/{course}/questions', 'Student\StudentController@store_question')->name('student.question.store');
    Route::get('/courses/{course}/lectures', 'Student\StudentController@course_lectures')->name('student.course.lectures');
    Route::get('/current-week-lectures', 'Student\StudentController@all_courses_lectures')->name('student.week.course.lectures');
    Route::get('/courses/{course}/questions/{question}/answers', 'Student\StudentController@question_answers')->name('student.question.answers');
    Route::post('/courses/{course}/questions/{question}/answers', 'Student\StudentController@add_answer')->name('student.answer.store');
    Route::get('/courseDetails/{id}', 'Student\StudentController@courseMaterials');

    Route::get('/courseQuestions/{id}', 'Student\StudentController@courseQuestions');

});
