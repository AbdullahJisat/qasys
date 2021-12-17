<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    // public function department()
    // {
    //     return $this->belongsTo(Department::class, 'department_id', 'id');
    // }

    public function departmnet()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }
}
