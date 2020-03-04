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

// Route::get('/', function () {
//     return view('Top');
// });

Route::get('/', 'StundentController@index');
Route::get('/signup', 'StundentController@signup');
Route::get('/signin', 'StundentController@signin');
// Route::get('/work/{id}', 'StundentController@work');

Route::get('/work/{id}', 'GroupController@subject');
Route::post('/1', 'StudentsController@signup');
Route::post('/2', 'StudentsController@signin');