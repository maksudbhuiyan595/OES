<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function list(){
        $subjects=Subject::orderBy('created_at', 'desc')->paginate(4);
        return view('backend.layouts.pages.subjects.list',compact('subjects'));
    }
    public function create(){
        return view('backend.layouts.pages.subjects.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'image'=>'required|image|mimes:png,jpg,svg,jpeg',
        ]);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $fileName=date('Ymdhsi'.'.'.$image->getClientOriginalExtension());
            $image->storeAs('/subjects',$fileName);
            // dd($fileName);
        }
        Subject::create([
            'name' =>$request->name,
            'image' =>$fileName,
        ]);
        Toastr::success('successfully created.', 'Subject');
        return redirect()->route('subject.list');
    }
    public function view($id){
        $subject=Subject::find($id);
        return view('backend.layouts.pages.subjects.view',compact('subject'));
    }
    public function edit($id){
        $subject=Subject::find($id);
        return view('backend.layouts.pages.subjects.edit',compact('subject'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required|max:200|min:1',
            // 'image'=>'required|image|mimes:png,jpg,svg,jpeg',
        ]);
        $subject=Subject::find($id);
        $subject->update([
            'name' =>$request->name,
           
        ]);
        Toastr::success('successfully updated.', 'Subject');
        return redirect()->route('subject.list');
    }
    public function destroy($id){
        Subject::destroy($id);
        Toastr::error('successfully deleted.', 'Subject');
        return redirect()->back();
    }
}
