<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\SendLink;
use App\Models\User;
use Illuminate\Http\Request;

class SendLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sendLinks = SendLink::with('teacher','course')->get();
        // dd($students);
        // dd($sendLinks);
        return view('pages.send_link.index', compact('sendLinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = User::where('user_type','teacher')->get();
        $students = User::where('user_type','student')->get();
        $courses = Course::all();
        return view('pages.send_link.create', compact('teachers', 'students', 'courses'));
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
            'link' => 'required',
        ]);

        $student = implode(',', $request->student_id);
        $sendLink = SendLink::create(['link' => $request->link,
                                    'teacher_id' => $request->teacher_id,
                                    'student_id' => $student,
                                    'course_id' => $request->course_id]);

        return redirect()->route('send-link.index')
                        ->with('success','Link Send Successfully.');
    }

    public function studentIndex(){
        $sendLinks = SendLink::with('teacher','course')->whereIn('student_id',[auth()->user()->id])->get();
        
        return view('pages.send_link.student_index', compact('sendLinks'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
