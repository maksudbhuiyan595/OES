<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.master');
    }
    public function subject(){
        $subjects=Subject::all();
        return view('frontend.layouts.pages.subject',compact('subjects'));
    }
}
