<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/studentQuestions/{course_id}/{student_id}', 'Student\StudentController@studentQuestions');
Route::get('/questionAnswers/{question_id}', 'Student\StudentController@questionAnswers');

Route::post('/editDescription', 'Course\CourseController@editDescription');



