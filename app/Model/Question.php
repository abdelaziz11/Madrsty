<?php

namespace App\Model;

use App\Model\Course;
use App\Model\Student;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['body', 'course_id', 'student_id'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
