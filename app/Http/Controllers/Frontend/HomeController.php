<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $allSubject=Subject::all();
        return view('frontend.layouts.pages.allSubject',compact('allSubject'));
    }
   /*  public function subjectExam(){
        return view('frontend.')
    } */
   
   
}
