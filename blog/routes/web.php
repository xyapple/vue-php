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
    $tasks=[
        'Go to store',
        'Prepare homework',
        'Clean the house',
        'Travel the world',
        'Be a good person',
    ];
    
    return view('welcome', compact('tasks'));
});
