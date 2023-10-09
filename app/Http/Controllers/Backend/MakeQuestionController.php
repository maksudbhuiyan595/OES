<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\MakeQuestion;
use App\Models\Subject;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class MakeQuestionController extends Controller
{
    public function list(){
        $questions=MakeQuestion::with(['subjects','levels'])->orderBy('created_at', 'desc')->paginate(3);
        return view('backend.layouts.pages.questions.list',compact('questions'));
    }
    public function create(){
        $subjects=Subject::all();
        $levels=Level::all();
        return view('backend.layouts.pages.questions.create',compact('subjects','levels'));
    }
    public function store(Request $request){
        $request->validate([
            'subject_id'=>'required',
            'level_id'=>'required',
            'tittle'=>'required',
            'option1'=>'required',
            'option2'=>'required',
            'option3'=>'required',
            'option4'=>'required',
            'number'=>'required',
        ]);
        MakeQuestion::create([
            'subject_id'=>$request->subject_id,
            'level_id'=>$request->level_id,
            'tittle'=>$request->tittle,
            'option1'=>$request->option1,
            'option2'=>$request->option2,
            'option3'=>$request->option3,
            'option4'=>$request->option4,
            'answer'=>$request->number,
        ]);
        Toastr::success('successfully created.', 'Question');
        return redirect()->route('question.list');
    }
    public function view($id){
        $question=MakeQuestion::find($id);
        return view('backend.layouts.pages.questions.view',compact('question'));
    }
    public function destroy($id){
        MakeQuestion::destroy($id);
        Toastr::error('successfully delete.', 'Question');
        return redirect()->back();
    }
    
}
