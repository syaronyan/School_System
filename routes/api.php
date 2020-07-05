<?php

use Illuminate\Http\Request;

use App\Progress;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/progress', 'ProgressController@pro');
Route::post('/graduate', 'AdminController@graduate');
// Route::post('/progress/done', 'ProgressController@index');
Route::post('/logout', 'StudentsController@ses_del');

