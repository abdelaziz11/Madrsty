<?php

namespace App\Model;

use App\Model\Grade;
use App\Model\Course;
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
}
