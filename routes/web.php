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

Route::get('/', 'MainController@home')->name('homepage');

Route::get('about', 'MainController@about')->name('aboutpage');

Route::get('contact', 'MainController@contact')->name('contactpage');

Route::get('service', 'MainController@service')->name('servicepage');

Route::resource('student', 'StudentController');