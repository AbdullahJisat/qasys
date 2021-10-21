<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\QuestionAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class QuestionAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questionAnswers = QuestionAnswer::with('course','teacher')->get();
        // dd($questionAnswers[2]->teacher->name);
        return view('pages.question_answer.index', compact('questionAnswers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.question_answer.create');
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

        if($request->hasFile('file') && $request->hasFile('is_ans')) {
            $filename = $request->name.'.'.$request->file->getClientOriginalExtension();
            $fileans = $request->name.'.'.$request->is_ans->getClientOriginalExtension();
            $file_path = str_ireplace("public/","/storage/", $request->file->storeAs('public/question',$filename));
            $ans_path = str_ireplace("public/","/storage/", $request->file->storeAs('public/answer',$fileans));
        }else{
            return back()->with('success','File not found');
        }

        $questionAnswer = QuestionAnswer::create(['name' => $request->name,
                                                'type' => $request->type,
                                                'teacher_id' => 4,
                                                'description' => $request->description,
                                                'course_id' => $request->course_id]);

        $ans = File::create(['type' => $request->file->getClientOriginalExtension(),
                            'file_url' => $file_path,
                            'is_ans' => $ans_path,
                            'qa_id' => $questionAnswer->id,]);

        return redirect()->route('ques-ans.index')
                        ->with('success','Student created successfully.');
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
        $questionAnswer = QuestionAnswer::find($id);
        return view('pages.question_answer.edit', compact('questionAnswer'));
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

        $questionAnswer = QuestionAnswer::with('files')->find($id);


        if($request->hasFile('file')) {
            foreach($questionAnswer->files as $file){
                Storage::delete('storage/question_answer'.$file->file_url);
            }

            $filename = $request->name.'.'.$request->file->getClientOriginalExtension();
            $file_path = str_ireplace("public/","/storage/", $request->file->storeAs('public/question_answer',$filename));
        }else{
            return back()->with('success','File not found');
        }

        $questionAnswer->update(['name' => $request->name, 'type' => $request->type, 'description' => $request->description]);

        $ans = File::create(['type' => $request->file->getClientOriginalExtension(), 'file_url' => $file_path, 'qa_id' => $questionAnswer->id]);

        $ansFind = File::find($ans->id);
        $ansFind->is_ans = $ans->id;
        $ansFind->save();

        return redirect()->route('ques-ans.index')
                        ->with('success','Student created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questionAnswer = QuestionAnswer::find($id)->delete();
        return back();
    }
}
