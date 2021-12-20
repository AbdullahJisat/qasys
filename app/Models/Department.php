<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function courseQues()
    {
        return $this->hasOneThrough(QuestionAnswer::class, Course::class, 'department_id', // Foreign key on the course table...
        'course_id', // Foreign key on the question answer table...
        'id', // Local key on the department table...
        'id' // Local key on the course table
        );
    }
}
