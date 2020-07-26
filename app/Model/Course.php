<?php

namespace App\Model;

use App\Model\Grade;
use App\Model\Teacher;
use App\Model\Student;
use App\Model\Question;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'teacher_id', 'grade_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id', 'id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'courses_students', 'course_id', 'student_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'course_id', 'id');
    }
}
