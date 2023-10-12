<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Level;
use App\Models\MakeQuestion;
use App\Models\QuestionPaper;
use App\Models\Subject;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    
    public function list(){
        
        $exams=Exam::with(['subjects','levels'])->orderBy('created_at', 'desc')->paginate(3);
        return view('backend.layouts.pages.exams.list',compact('exams'));
    }
    public function create(){
        $subjects=Subject::all();
        $levels=Level::all();
        return view('backend.layouts.pages.exams.create',compact('subjects','levels'));
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'subject_id'=>'required',
            'level_id'=>'required',
            'name'=>'required',
            'duration'=>'required',
            'number'=>'required',
        ]);
       $exam= Exam::create([
            'subject_id'=>$request->subject_id,
            'level_id'=>$request->level_id,
            'name'=>$request->name,
            'duration'=>$request->duration,
            'total_question'=>$request->number,
        ]);

        // make question paper
        $questions=MakeQuestion::where('subject_id',$request->subject_id)
                                ->where('level_id',$request->level_id)
                                ->inRandomOrder()
                                ->take($request->total_question)
                                ->get();
        //    dd($questions);
    if(count($questions)>0){
        foreach($questions as $question){
            QuestionPaper::create([
            // dd($questions)
            'exam_id'=>$exam->id,
            'question_id'=>$question->id,
            'tittle'=>$request->name,
            'option1'=>$question->option1,
            'option2'=>$question->option2,
            'option3'=>$question->option3,
            'option4'=>$question->option4,
            'answer'=>$question->answer,
            'subject_id'=>$request->subject_id,
            'level_id'=>$request->level_id,
            ]);
        }
    }
        Toastr::success('successfully created.', 'Exam');
        return redirect()->route('exam.list');
    }
    public function view($id){
        $exam=Exam::find($id);
        return view('backend.layouts.pages.exams.view',compact('exam'));
    }
    public function destroy($id){
        Exam::destroy($id);
        Toastr::error('successfully delete.', 'Exam');
        return redirect()->back();
    }
}
