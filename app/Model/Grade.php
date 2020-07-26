<?php

namespace App\Model;

use App\Model\Course;
use App\Model\Student;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['name'];

    public function students()
    {
        return $this->hasMany(Student::class, 'grade_id', 'id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'course_id', 'id');
    }
}
