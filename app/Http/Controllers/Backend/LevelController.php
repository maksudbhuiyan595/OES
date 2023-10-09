<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function list(){
        $levels=Level::orderBy('created_at', 'desc')->paginate(4);
        return view('backend.layouts.pages.levels.list',compact('levels'));
    }
    
    public function create(){
        return view('backend.layouts.pages.levels.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            
        ]);
        Level::create([
            'name' =>$request->name,
        ]);
        Toastr::success('successfully created.', 'Level');
        return redirect()->route('level.list');
    }
    public function view($id){
        $level=Level::find($id);
        return view('backend.layouts.pages.levels.view',compact('level'));
    }
    public function edit($id){
        $level=Level::find($id);
        return view('backend.layouts.pages.levels.edit',compact('level'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            // 'image'=>'required|image|mimes:png,jpg,svg,jpeg',
        ]);
        $subject=Level::find($id);
        $subject->update([
            'name' =>$request->name,
           
        ]);
        Toastr::success('successfully updated.', 'Level');
        return redirect()->route('level.list');
    }
    public function destroy($id){
        Level::destroy($id);
        Toastr::error('successfully deleted.', 'Level');
        return redirect()->back();
    }
}
