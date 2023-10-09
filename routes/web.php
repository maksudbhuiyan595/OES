<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LevelController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
    Route::get('level/list',[LevelController::class,'list'])->name('level.list');
    Route::get('level/list',[LevelController::class,'list'])->name('level.list');
    Route::get('level/list',[LevelController::class,'list'])->name('level.list');
    Route::get('level/list',[LevelController::class,'list'])->name('level.list');
    Route::get('level/list',[LevelController::class,'list'])->name('level.list');
    Route::get('level/list',[LevelController::class,'list'])->name('level.list');
});

require __DIR__.'/auth.php';
