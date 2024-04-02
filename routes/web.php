<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MessageController;
use \App\Http\Controllers\ShowController;

Route::get('/', function () {
    return view('home');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('welcome');
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::post('/messages', [MessageController::class,'store']);
// Route::get('/messages', [MessageController::class,'retrieveMessages']);
Route::get('/',[ShowController::class,'Show']);
Route::get('/messages/{id}/edit',[MessageController::class,'edit']);
Route::post('/messages/{id}/reply',[MessageController::class,'reply']);