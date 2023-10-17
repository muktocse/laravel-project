<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\TaskController;


Route::get('',[frontendController::class,'home'])->name('front.home');
Route::get('contact',[frontendController::class,'contact'])->name('front.contact');
Route::get('about-us',[frontendController::class,'about'])->name('front.about');


Route::get('task/create',[TaskController::class,'create'])->name('task.create');
Route::post('task',[TaskController::class,'store'])->name('task.store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
