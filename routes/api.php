<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MessageController;
use \App\Http\Controllers\ShowController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/messages', [MessageController::class,'store']);
Route::get('/messages', [MessageController::class,'retrieveMessages']);
Route::post('/messages/{id}/reply', 'replyController@reply');
Route::post('/',[ReplyController::class,'Reply']);































// Route::put('/messages/update/{message}','MessageController@update');
// Route::delete('/messages/destroy/{message}','MessageController@destory');
