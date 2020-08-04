<?php

namespace App\Model;

use App\Model\Course;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = ['name', 'course_id', 'lecture_date', 'meeting_name', 'meeting_password'];
                            

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

}
