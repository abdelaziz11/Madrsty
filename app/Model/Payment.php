<?php

namespace App\Model;

use App\Model\Lecture;
use App\Model\Student;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['lecture_id', 'student_id', 'payment'];

    public function lecture()
    {
        return $this->belongsTo(Lecture::class, 'lecture_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
