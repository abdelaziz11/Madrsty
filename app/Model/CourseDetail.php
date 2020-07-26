<?php

namespace App\Model;

use App\Model\Course;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = ['name', 'course_id', 'title', 'body', 'file_url'];
                            

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

}
