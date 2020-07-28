<?php

namespace App\Model;

use App\Model\Course;
use App\Model\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Teacher extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password', 'subject_id'];
    
    protected $guarded = ['password'];

    protected $guard = 'teacher';


    public function subject()
    {
        return $this->hasOne(Subject::class, 'id', 'subject_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'teacher_id', 'id');
    }

}
