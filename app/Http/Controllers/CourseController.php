<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\CourseTeacher;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        // $courses = Course::with('department')->get();
        $courses = Course::with('departmnet')->get();
        return view('pages.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::pluck('name', 'id');
        // dd($departments);
        return view('pages.course.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Course::create(['name' => $request->name, 'code' => $request->code, 'department_id' => $request->department_id]);

        return redirect()->route('course.index')
                        ->with('success','Course created successfully.');
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('pages.course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Course::find($id)->update(['name' => $request->name, 'code' => $request->code]);

        return redirect()->route('course.index')
                        ->with('success','Student created successfully.');
    }

    public function destroy($id)
    {
        Course::find($id)->delete();
        return back();
    }

    public function assignCourseTeacher()
    {
        $assign_teacher = User::with('courses')->where('user_type', 'teacher')->get();
        return view('pages.course.assign_teacher',compact('assign_teacher'));
    }

    public function courseAssignTeacher()
    {
        return view('pages.course.teacher_assign');
    }

    public function courseAssignStoreTeacher(Request $request)
    {
        foreach($request->course_id as $course){
            CourseTeacher::create(['teacher_id' => $request->teacher_id,
                                    'course_id' => $course,]);
        }
        return redirect()->route('course.assign')->with('success','Student created successfully.');;
    }

    public function courseAssignEditTeacher($id)
    {
        $course_teacher = User::with('courses')->find($id);
        return view('pages.course.teacher_assign_edit', compact('course_teacher'));
    }

    public function courseAssignUpdateTeacher(Request $request, $id)
    {
        // $course_teacher = User::with('courses')->find($id);
        // // dd($course_teacher);
        // $course_teacher->courses->detach();
        // $course_teacher->courses->attach($request->course_id);

        $course_teacher = CourseTeacher::where('teacher_id',$id)->get();
        foreach($course_teacher as $course){
            $course->delete();
        }
        foreach($request->course_id as $course){
            CourseTeacher::create(['teacher_id' => $request->teacher_id,
                                    'course_id' => $course,]);
        }
        return redirect()->route('course.assign')->with('success','Student created successfully.');
    }

    public function courseAssignDeleteTeacher($id)
    {
        $course_teacher = CourseTeacher::where('teacher_id',$id)->get();
        foreach($course_teacher as $course){
            $course->delete();
        }
        return back()->with('success','Student created successfully.');
    }

    public function assignCoursestudent()
    {
        $assign_student = User::with('coursesStudent')->where('user_type', 'student')->where('id', auth()->user()->id)->get();
        return view('pages.course.assign_student',compact('assign_student'));
    }

    public function courseAssignstudent()
    {
        return view('pages.course.student_assign');
    }

    public function courseAssignStorestudent(Request $request)
    {
        foreach($request->course_id as $course){
            CourseStudent::create(['student_id' => auth()->user()->id,
                                    'course_id' => $course,]);
        }
        return redirect()->route('course.assign-index')->with('success','Student created successfully.');;
    }

    public function courseAssignEditstudent($id)
    {
        $course_student = User::with('coursesStudent')->find($id);
        return view('pages.course.student_assign_edit', compact('course_student'));
    }

    public function courseAssignUpdatestudent(Request $request, $id)
    {
        // $course_student = User::with('courses')->find($id);
        // // dd($course_student);
        // $course_student->courses->detach();
        // $course_student->courses->attach($request->course_id);

        $course_student = CourseStudent::where('student_id',$id)->get();
        foreach($course_student as $course){
            $course->delete();
        }
        foreach($request->course_id as $course){
            CourseStudent::create(['student_id' => $id,
                                    'course_id' => $course,]);
        }
        return redirect()->route('course.assign-index')->with('success','Student created successfully.');
    }

    public function courseAssignDeletestudent($id)
    {
        $course_student = CourseStudent::where('student_id',$id)->get();
        foreach($course_student as $course){
            $course->delete();
        }
        return back()->with('success','Student created successfully.');
    }
}
