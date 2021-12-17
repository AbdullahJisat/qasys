<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender',
        'user_type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function course()
    // {
    //     return $this->belongsToMany(Course::class, 'teacher_id', 'id');
    // }
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_teachers', 'teacher_id', 'course_id');
    }

    public function coursesStudent()
    {
        return $this->belongsToMany(Course::class, 'course_students', 'student_id', 'course_id');
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_teachers', 'teacher_id', 'department_id');
    }

    public function departmentsStudent()
    {
        return $this->belongsToMany(Department::class, 'department_students', 'student_id', 'department_id');
    }
}
