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
Route::get('/mypage', 'StundentController@mypage');
Route::get('/Top', 'StundentController@Top');
Route::get('/option', 'StundentController@option');
Route::get('/document', 'StundentController@document');
Route::get('/signup', 'StundentController@signup');
// Route::get('/signin', 'StundentController@signin');
// Route::get('/work/{id}', 'StundentController@work');

Route::get('/work/{id}', 'GroupController@subject');
//Route::get('/work/{id}', 'TasksController@task');
Route::post('/1', 'StudentsController@signup');
Route::post('/change_password', 'StudentsController@change_password');
Route::post('/signin', 'StudentsController@signin');
Route::get('/work/{id}/{page}', 'PageController@taskpage');
Route::get('/logout', 'StudentsController@ses_del');
