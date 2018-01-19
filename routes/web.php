<?php

use App\Task;
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

Route::get('/', 'PostController@index');

Route::get('/posts/create','PostController@create');

Route::get('/posts/{id}','PostController@show');

Route::post('/posts','PostController@store');

Route::post('/posts/{post}/comment','CommentsController@store');

Route::get('/csstry',function(){
	return view('csstry');
});

Route::get('/welcome',function(){
	return view('welcome');
});

Route::get('/try',function(){
	$tasks = [
		'name' => 'Shahel',
		'place' => 'Balaju',
		'DOB' => '2051-10-25'
	];
	// $name = "Shahel";
	// $add = "Balaju";
	// $phone = "4880334";
	$tasks = [
		"name" => "Shahel",
		"add" => "Balaju",
		"phone" => "4880334"
	];
	$result = compact('tasks');
	print_r($result);
});

Route::get('/tasks/{id}','TasksController@show');

Route::get('/tasks','TasksController@index');

Route::get('/blogs',function(){
	return view('blogs.master');
});

// REST URL CONVENTIONS

// posts

// GET /posts

// GET /posts/create

// POST /posts/{id}/edit

// GET /posts/{id}

// PATCH /posts/{id}

// DELETE /posts/{id}
