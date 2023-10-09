<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LevelController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;





Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/subjects',[HomeController::class, 'subject'])->name('subject');


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
});

require __DIR__.'/auth.php';
