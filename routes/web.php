<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::name('chat.list')->get('/chat', function () {
    return view('chat');
})->middleware('auth');

Route::get('/messages', function () {
    return App\Message::with('user')->get();
})->middleware('auth');

Route::post('/messages', function () {
    // Store the message
    $user = Auth::user();
    
    $message = $user->messages()->create([
        'message' => request()->message
    ]);

    return ['status' => 'OK'];
})->middleware('auth');
