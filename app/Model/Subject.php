<?php

namespace App\Model;

use App\Model\Grade;
use App\Model\Teacher;
use App\Model\Lecture;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name', 'logo'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'subject_id', 'id');
    }
    
}
