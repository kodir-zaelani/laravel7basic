<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/','SampleController@index')->name('home');

Route::post('/store', 'SampleController@store')->name('store');
Route::get('/mail', 'SampleController@mail')->name('mail');
Route::get('/emails', 'SampleController@emails')->name('emails');
Route::get('/checkemails', 'SampleController@checkemails')->name('checkemails');

Route::Resource('/users', 'UserController');



