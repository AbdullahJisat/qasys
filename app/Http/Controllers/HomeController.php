<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Models\QuestionAnswer;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth','isStudent','isTeacher']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function student()
    {
        $datas = HomeController::allCourse();
        return view('student', compact('datas'));
    }

    public function teacher()
    {
        $datas = HomeController::allCourse();
        return view('teacher', compact('datas'));
    }

    public function admin()
    {
        $datas = HomeController::allCourse();
        return view('admin', compact('datas'));
    }

    public function allCourse(){
        $data['courses'] = Course::count();
        $data['department'] = Department::count();
        $data['teacher'] = User::where('user_type', 'teacher')->count();
        $data['ques'] = QuestionAnswer::count();
        return $data;
    }
}
