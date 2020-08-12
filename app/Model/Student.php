<?php

namespace App\Model;

use App\Model\Grade;
use App\Model\Answer;
use App\Model\Course;
use App\Model\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password', 'grade_id'];
    
    protected $guarded = ['password'];

    protected $guard = 'student';

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id', 'id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_students', 'student_id', 'course_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'student_id', 'id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'student_id', 'id');
    }
}
