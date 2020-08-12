<?php

namespace App\Model;

use App\Model\Teacher;
use App\Model\Student;
use App\Model\Question;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['body', 'question_id'];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
