<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ExamController;
use App\Http\Controllers\Backend\LevelController;
use App\Http\Controllers\Backend\MakeQuestionController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;





Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/all-exam/list/{suject_id}',[HomeController::class, 'allExamList'])->name('all.exam.list');


Route::middleware('auth')->group(function () {
   
    Route::get('/admin',[AuthController::class, 'admin'])->name('admin');

    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
    //ProfileController
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //SubjectController
    Route::get('/subject/list',[SubjectController::class, 'list'])->name('subject.list');
    Route::get('/subject/create',[SubjectController::class, 'create'])->name('subject.create');
    Route::post('/subject/store',[SubjectController::class, 'store'])->name('subject.store');
    Route::get('/subject/view/{id}',[SubjectController::class, 'view'])->name('subject.view');
    Route::get('/subject/edit/{id}',[SubjectController::class, 'edit'])->name('subject.edit');
    Route::post('/subject/update/{id}',[SubjectController::class, 'update'])->name('subject.update');
    Route::get('/subject/delete/{id}',[SubjectController::class, 'destroy'])->name('subject.destroy');

    //Levelcontroller
    Route::get('level/list',[LevelController::class,'list'])->name('level.list');
    Route::get('level/create',[LevelController::class,'create'])->name('level.create');
    Route::post('level/store',[LevelController::class,'store'])->name('level.store');
    Route::get('level/view/{id}',[LevelController::class,'view'])->name('level.view');
    Route::get('level/edit/{id}',[LevelController::class,'edit'])->name('level.edit');
    Route::post('level/update/{id}',[LevelController::class,'update'])->name('level.update');
    Route::get('level/delete/{id}',[LevelController::class,'destroy'])->name('level.destroy');

    //MakeQuestionController
    Route::get('question/list',[MakeQuestionController::class,'list'])->name('question.list');
    Route::get('question/create',[MakeQuestionController::class,'create'])->name('question.create');
    Route::post('question/store',[MakeQuestionController::class,'store'])->name('question.store');
    Route::get('question/view/{id}',[MakeQuestionController::class,'view'])->name('question.view');
    Route::get('question/edit/{id}',[MakeQuestionController::class,'edit'])->name('question.edit');
    Route::post('question/update/{id}',[MakeQuestionController::class,'update'])->name('question.update');
    Route::get('question/delete/{id}',[MakeQuestionController::class,'destroy'])->name('question.destroy');
    
    
    //ExamController
    Route::get('exam/list',[ExamController::class,'list'])->name('exam.list');
    Route::get('exam/create',[ExamController::class,'create'])->name('exam.create');
    Route::post('exam/store',[ExamController::class,'store'])->name('exam.store');
    Route::get('exam/view/{id}',[ExamController::class,'view'])->name('exam.view');
    Route::get('exam/edit/{id}',[ExamController::class,'edit'])->name('exam.edit');
    Route::post('exam/update/{id}',[ExamController::class,'update'])->name('exam.update');
    Route::get('exam/delete/{id}',[ExamController::class,'destroy'])->name('exam.destroy');
});

require __DIR__.'/auth.php';
