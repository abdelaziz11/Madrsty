<?php

namespace App\Model;

use App\Model\Course;
use App\Model\Student;
use App\Model\Answer;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'course_id', 'student_id'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }

    public function get_first_answer()
    {
        $first_answer = $this->answers()->orderBy('created_at', 'DESC')->pluck('body')->first();
        return $first_answer;
    }
}
