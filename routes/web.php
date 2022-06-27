<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
})->name('menu');

Route::get('/home', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::delete('/viewblogs/blog/{articles}/delete', [BlogController::class, 'Delete'])
    ->name('deleteblog-form');

Route::get('/viewblogs/blog/{articles}', [BlogController::class, 'ShowCurrent'])
    ->name('viewblog');

Route::get('/writeblog',[CategoryController::class, 'GetList'])
    ->name('writeblog');

Route::get('/viewblogs',[BlogController::class, 'ShowAll'])
    ->name('viewblogs');

Route::get('/viewblogs/blog/{articles}/update',[BlogController::class, 'ShowCurrentForUpdate'])
    ->name('updateblog-form');

Route::put('/viewblogs/blog/{articles}/update',[BlogController::class,'Update'])
   ->name('updateblogsubmit-form');

Route::post('/submitblog',[BlogController::class, 'Submit'])
    ->name('submitblog-form');
