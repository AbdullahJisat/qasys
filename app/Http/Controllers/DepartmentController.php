<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\DepartmentStudent;
use App\Models\DepartmentTeacher;
use App\Models\User;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('pages.department.index')->with('departments', $departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.department.create');
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

        Department::create(['name' => $request->name, 'code' => $request->code]);

        return redirect()->route('department.index')
                        ->with('success','Department created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::find($id);
        return view('pages.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Department::find($id)->update(['name' => $request->name, 'code' => $request->code]);

        return redirect()->route('department.index')
                        ->with('success','Department created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::find($id)->delete();
        return back();
    }

    public function assignDepartmentTeacher()
    {
        $assign_teacher = User::with('departments')->where('user_type', 'teacher')->get();
        return view('pages.department.assign_teacher',compact('assign_teacher'));
    }

    public function departmentAssignTeacher()
    {
        return view('pages.department.teacher_assign');
    }

    public function departmentAssignStoreTeacher(Request $request)
    {
        foreach($request->department_id as $department){
            DepartmentTeacher::create(['teacher_id' => $request->teacher_id,
                                    'department_id' => $department,]);
        }
        return redirect()->route('department.assign')->with('success','Department Assign created successfully.');;
    }

    public function departmentAssignEditTeacher($id)
    {
        $department_teacher = User::with('departments')->find($id);
        return view('pages.department.teacher_assign_edit', compact('department_teacher'));
    }

    public function departmentAssignUpdateTeacher(Request $request, $id)
    {
        // $department_teacher = User::with('departments')->find($id);
        // // dd($department_teacher);
        // $department_teacher->departments->detach();
        // $department_teacher->departments->attach($request->department_id);

        $department_teacher = DepartmentTeacher::where('teacher_id',$id)->get();
        foreach($department_teacher as $department){
            $department->delete();
        }
        foreach($request->department_id as $department){
            DepartmentTeacher::create(['teacher_id' => $request->teacher_id,
                                    'department_id' => $department,]);
        }
        return redirect()->route('department.assign')->with('success','Student created successfully.');
    }

    public function departmentAssignDeleteTeacher($id)
    {
        $department_teacher = DepartmentTeacher::where('teacher_id',$id)->get();
        foreach($department_teacher as $department){
            $department->delete();
        }
        return back()->with('success','Student created successfully.');
    }

    public function assignDepartmentstudent()
    {
        $assign_student = User::with('departmentsStudent')->where('user_type', 'student')->where('id', auth()->user()->id)->get();
        return view('pages.department.assign_student',compact('assign_student'));
    }

    public function departmentAssignstudent()
    {
        return view('pages.department.student_assign');
    }

    public function departmentAssignStorestudent(Request $request)
    {
        foreach($request->department_id as $department){
            DepartmentStudent::create(['student_id' => auth()->user()->id,
                                    'department_id' => $department,]);
        }
        return redirect()->route('department.assign-index')->with('success','Student created successfully.');;
    }

    public function departmentAssignEditstudent($id)
    {
        $department_student = User::with('departmentsStudent')->find($id);
        return view('pages.department.student_assign_edit', compact('department_student'));
    }

    public function departmentAssignUpdatestudent(Request $request, $id)
    {
        // $department_student = User::with('departments')->find($id);
        // // dd($department_student);
        // $department_student->departments->detach();
        // $department_student->departments->attach($request->department_id);

        $department_student = DepartmentStudent::where('student_id',$id)->get();
        foreach($department_student as $department){
            $department->delete();
        }
        foreach($request->department_id as $department){
            DepartmentStudent::create(['student_id' => $id,
                                    'department_id' => $department,]);
        }
        return redirect()->route('department.assign-index')->with('success','Student created successfully.');
    }

    public function departmentAssignDeletestudent($id)
    {
        $department_student = DepartmentStudent::where('student_id',$id)->get();
        foreach($department_student as $department){
            $department->delete();
        }
        return back()->with('success','Student created successfully.');
    }
}
