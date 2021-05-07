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

/*Route::get('/demo', function() {
    return view('demo');
});*/

Route::get('demo', 'TaskController@showlist');

Route::get('demo/task/{id}', 'TaskController@gettoconfig');
Route::get('demo/delete/{id}', 'TaskController@deletetask');
Route::post('demo/configtask', 'TaskController@configtask');

Route::post('addtolist', 'TaskController@addlist');

/*Route::get('/demo/addtb', function(){
	Schema::create('task', function ($table) {
	    $table->increments('id')->autoIncrement();
	    $table->string('todo');
	    $table->string('user');
	    $table->timestamps();
	    $table->date('finishday');
	});
	echo "Complete";
});*/

Route::get('/demo/viewadd', function(){
	return view('addlist');
});

Route::get('demo/formlogin', function() {
    return view('login');
});
Route::get('demo/formsignup', function() {
    return view('signup');
});

Route::post('/demo/login', 'Auth\LoginController@login');

Route::get('/demo/logout', 'Auth\LoginController@logout');

Route::post('/demo/adduser', 'Auth\RegisterController@create');

// Route::prefix('demo')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
// });