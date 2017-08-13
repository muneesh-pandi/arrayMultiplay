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
//     return view('welcome');
// });

Route::resource('/', 'HomeController');
Route::get('task2', 'PagesController@getArray');
Route::post('task2', 'PagesController@getTask2')->name('multiArray');
Route::get('task3', function () {
    return view('pages.interviewTask3');
});
