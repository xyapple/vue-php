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
Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/{post}/comments', 'CommentsController@store');

use App\Task;
Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{task}','TaskController@show');

// Route::get('/tasks', function () {
//     //$tasks=DB::table('tasks')->get();
//     //$tasks= Task::all();
//     //return $tasks;
//     return view('tasks.index',compact('tasks'));
// });

// Route::get('/tasks/{task}', function ($id) {
//
//     //$task =DB::table('tasks')->find($id);
//     $task = Task::find($id);
//     //return $tasks;
//     return view('tasks.show',compact('task'));
// });
